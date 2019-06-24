import numpy as np
import pandas as pd
import pymysql
import pickle
from sklearn import preprocessing, metrics
from sklearn.model_selection import train_test_split
from sklearn.cluster import KMeans


##conection data
mysql_cn= pymysql.connect(host='localhost', 
                port=3306,user='root', passwd='fajar37', 
                db='datasetdamri')
data_df = pd.read_sql("SELECT * FROM dataset WHERE id_jam IS NOT NULL;", con=mysql_cn)
mysql_cn.close()


##preprocessing data
def preprocess_df(df):
    processed_df = df.copy()
    le = preprocessing.LabelEncoder()
    return processed_df

processed_df = preprocess_df(data_df)

X = processed_df.values

##kmeans execution
kmeans = KMeans(n_clusters=2, random_state=0).fit(X)
kmeans.labels_


y = kmeans.labels_

X_train, X_test, y_train, y_test = train_test_split(X,y,test_size=0.20,random_state=70)

##predicted
predicted = kmeans.predict(X_test)
print("accuracy : ", metrics.accuracy_score(y_test, predicted))

##pickle dump open result train
pickle.dump( kmeans, open( "result.p", "wb" ) )