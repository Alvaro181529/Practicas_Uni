from flask import Flask

app =Flask(__name__)

@app.route('/')
def home():
    return'hola mundo'

@app.route('/abaut')
def abaut():
    return 'ijsanxisn'

if __name__ =='__main__':
    app.run()