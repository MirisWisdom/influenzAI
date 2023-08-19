# influenzAI

*Conveniently providing trustworthy information to people suffering from Influenza and Long COVID, using AI trained on reputable government data, and with an emphasis on privacy.*

## Our Mission

During the COVID pandemic, we have seen an incredible amount of misinformation spreading on the Internet. An effective mitigation is allowing easy, convenient and intuitive access to reputable information. This is where influenzAI tries to fill in the gap, by allowing the user to query a model trained on trusted, reputable open government data.

### Accessibility

1. Querying is done using natural language prompts, instead of scrolling through oceans of documents. A person should not need to think like a computer when querying answers!
2. Using features such as voice to text, we improve convenience by reducing typing on phones for busy medical practitioners, and emphasising on accessibility to people new to this technology.
3. A minimalist, responsive UI which focuses on the queries and responses. With this project's architecture, different UIs can be built for different kinds of scenarios and devices.

### Scaling Potentials

Of course, Long COVID and Influenza are a drop in the ocean - there are plenty of other health issues and concerns people have. Using a diverse range of open government data, we can augment our LLM with additional knowledge of other topics, and reach new audiences whom would benefit from a convenient, informative and private source of healthcare information.

From a technical perspective, InfluenzAI has been architected with the intent of being modular and scalable. We can leverage container orchestration to scale up the project as necessary, with minimal difficulties.

### Interactive and Visual

To improve the depth of responses, we are building our own system which visualises government data using intuitive, useful charts and maps. This bespoke system would respond to known queries (e.g. "long covid trends in 2023") using visual responses, as a complement to the text-based responses from our LLM.

### Privacy

Privacy is paramount in healthcare, which is why our solution uses a self-hosted ML trained on open government data.

Queries do not get exposed to third-party solutions, and we refrain from gathering personal information from people.

### Bias Mitigation

Our architecture and self-hosted model grants us control over our model, and thus permits us to minimise external bias. The challenge of bias lies in the government data itself, which we can curate using an ethical protocol that focuses on inclusivity, diversity and authenticity.

### Openness and Transparency

To improve openness and transparency, we visually display all the documents/datasets used for our model. This allows our model to be scrutinised for any unintended biases, and provides users/stakeholders with confidence in the potential & quality of our model.

## Architecture

InfluenzAI consists of three major components:

1. The InfluenzAI Web Interface, a PHP platform which provides a minimalist and beautiful UI to the end-user for querying and responses;
2. The InfluenzAI Brdiging API, which sits in-between the Web Interface and the LLM back-end (LocalGPT for our prototype).
3. The back-end LLM, which ingests the provided open government data and responded to the inbound user queries.

![architecture](./doc/architecture.svg)

Using this architecture, the components remain decoupled and scalable. This opens up the opportunities for alternative UIs (e.g. mobile apps) and LLMs (e.g. LLaMA).