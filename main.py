from flask import Flask, jsonify, abort, request, make_response, url_for, render_template
from flask_cors import CORS, cross_origin
import numpy as np
import pickle


app = Flask(__name__, static_url_path = "/static")
cors = CORS(app)

@app.errorhandler(400)
def not_found(error):
    return make_response(jsonify( { 'error': 'Bad request' } ), 400)

@app.errorhandler(404)
def not_found(error):
    return make_response(jsonify( { 'error': 'Not found' } ), 404)


# main route
# render index.html
@app.route('/', methods = ['GET'])
def index():
    return "test"


@app.route('/api/v1/result', methods = ['POST'])
def predict():
    
    # value prams from front end
    X_predict = np.float32([[request.form['id_jam'], request.form['id_trayek'], request.form['id_layanan'], request.form['jml_seat'], request.form['jml_penumpang']]])

    
    ################################
    # Load pickle
    ################################

    kmeans = pickle.load( open( "result.p", "rb" ))

    ## load predict after training algorithm
    predict = kmeans.predict(X_predict)


    response = {
        'endpoint': 'api/v1/result',
        'method': 'POST',
        'jam': request.form['id_jam'],
        'trayek': request.form['id_trayek'],
        'layanan': request.form['id_layanan'],
        'seat': request.form['jml_seat'],
        'penumpang': request.form['jml_penumpang'],
        'predict':int(predict)
    }

    return jsonify( { 'response': response } )

if __name__ == '__main__':
    app.run(port=8000)