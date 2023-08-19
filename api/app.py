from flask import *
from bs4 import *
import requests

app = Flask(__name__)

@app.route('/')
def query():
    dmo = request.args.get('demo') == 'yes'
    qry = request.args.get('query')
    url = 'http://{}/'.format(request.args.get('instance'))
    obj = {'user_prompt': qry}

    if dmo:
        f = open("demo.html", "r")
        txt = f.read()
        f.close()
    else:
        txt = requests.post(url, obj).content

    bs4 = BeautifulSoup(txt, 'html.parser')

    parent = bs4.find('strong', string='Sources').find_parent('div')
    answer = parent.find_all('p')[1].getText().strip()
    sources = []

    for source in parent.find_all('div', class_='accordion-item'):
        document = source.find('button', class_='accordion-button').getText()
        context  = source.find('div', class_='accordion-body').getText()

        sources.append({
            'document': document.strip(),
            'context': context.strip()
        })

    return {
        'instance': url,
        'query': qry,
        'answer': answer,
        'sources': sources
    }

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8000)
