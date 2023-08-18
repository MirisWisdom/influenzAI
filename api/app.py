from flask import *
app = Flask(__name__)

@app.route('/')
def query():
	return jsonify(
		{
			'query': request.args.get('query'),
			'result': [
				{
					'document': 'test.pdf',
					'body': 'medicine is good'
				},
				{
					'document': 'test01.pdf',
					'body': 'medicine is very good'
				},
				{
					'document': 'test02.pdf',
					'body': 'medicine is excellent'
				}
			]
		})

if __name__ == '__main__':
	app.run(host='0.0.0.0', port=8000)
