from flask import *
from bs4 import *
import requests
import random

app = Flask(__name__)

@app.route('/')
def query():
    # Inbound parameters (usually from the influenzAI website)
    demo_mode = request.args.get('demo') == 'yes'
    user_prompt = request.args.get('query')
    gpt_instance = 'http://{}/'.format(request.args.get('instance'))

    # Demo vs Real Mode Handling
    # ==========================
    # -   Demo mode uses cached prompts and responses from localGPT
    # -   Real mode tries to query to the localGPT instance
    # -   Both modes parse the localGPT HTML response into an useful object
    if demo_mode:
        demo_prompts = [
            'How can COVID education be improved?',
            'What is the burden of COVID on education in NSW',
            'How do I diagnose and treat Long COVID',
            'How many deaths were there from influenza in July and August 2023',
            'What kind of symptoms were people getting from Long COVID?'
        ]

        # For variety, the demo mode will select a random prompt
        demo_prompt = random.randint(0, 4)
        user_prompt = demo_prompts[demo_prompt]
        prompt_file = "demo-0{}.html".format(demo_prompt)

        cached_response = open(prompt_file, "r")
        gpt_response = cached_response.read()
        cached_response.close()
    else:
        gpt_submission = {'user_prompt': user_prompt}
        gpt_response = requests.post(gpt_instance, gpt_submission).content

    # Parse localGPT HTML -- we work backwards by:
    #
    # 1.  Find the <strong>Sources</strong> element
    # 2.  Find the element's *parent*
    # 3.  Find document and context elements, where:
    #
    #     -   Document = File name, found in the text of the accordion button
    #     -   Context  = Contents used by localGPT, found in the accordion body
    #
    # We build an object representing each source (document and context)
    # and add it to the list of sources we will return.
    soup = BeautifulSoup(gpt_response, 'html.parser')

    parent = soup.find('strong', string='Sources').find_parent('div')
    answer = parent.find_all('p')[1].getText().strip()
    sources = []

    for source in parent.find_all('div', class_='accordion-item'):
        document = source.find('button', class_='accordion-button').getText()
        context  = source.find('div', class_='accordion-body').getText()

        sources.append({
            'document': document.strip(),
            'context': context.strip()
        })

    # JSON response returned to the client -- compatible with the influenzAI UI.
    return {
        'instance': gpt_instance,
        'query': user_prompt,
        'answer': answer,
        'sources': sources
    }

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8000)
