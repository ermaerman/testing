from flask import Flask, jsonify, abort, request, make_response, url_for, render_template
from flask_cors import CORS, cross_origin
import numpy as np
#import pickle


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


# @app.route('/api/v1.0/bayes', methods = ['POST'])
# def predict():
   
   
    X_predict = np.float32([[request.form['umur'], request.form['pekerjaan'], request.form['penghasilan'], request.form['jml_ang_kel'], request.form['status_rumah']]])

    
    ################################
    # Load pickle
    ################################

    gnb = pickle.load( open( "bayes.p", "rb" ))

    predict = gnb.predict(X_predict)


    response = {
        'endpoint': 'api/v1.0/bayes',
        'method': 'POST',
        'umur': request.form['umur'],
        'pekerjaan': request.form['pekerjaan'],
        'penghasilan': request.form['penghasilan'],
        'jumlah': request.form['jml_ang_kel'],
        'status_rumah': request.form['status_rumah'],
        'status':int(predict)
    }

    return jsonify( { 'response': response } )

if __name__ == '__main__':
    app.run(host='0.0.0.0', debug = True)