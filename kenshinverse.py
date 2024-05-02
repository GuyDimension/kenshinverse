from flask import Flask, request

app = Flask (__name__)

def search():
    query = request.args.get('query')
    return render.template('search_results.html', query=query)

if __name__ == '__main__':
    app.run(debug=True)