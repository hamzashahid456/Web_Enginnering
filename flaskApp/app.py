from flask import Flask, render_template, flash, redirect, url_for, request 
import mysql.connector
from wtforms import Form, StringField, TextAreaField, validators 

app = Flask(__name__)

# create a connection to the MySQL database
cnx = mysql.connector.connect(
    user='hamza', 
    password='hamza@123', 
    host='localhost', 
    database='flaskApp'
    )

# For home page
@app.route('/')
def index():
    return render_template('home.html')

# for articles page
@app.route('/articles')
def artilcles():
    # create cursor
    cur = cnx.cursor()
    
    # get articles
    cur.execute("SELECT * FROM articles")
    
    #fetch all articles
    articles = cur.fetchall()

    # close connection
    cur.close()

    return render_template('articles.html', articles = articles)


# for viewing specific article
@app.route('/article/<string:id>/')
def artilcle(id):
    # create cursor
    cur = cnx.cursor()
    
    # get article
    cur.execute("SELECT * FROM articles WHERE articleID = %s ", [id])
    
    #fetch all articles
    article = cur.fetchone()
    
    
    return render_template('article.html', article = article)

    

# Article Form Class
class ArticleForm(Form):
    title = StringField('Title', [validators.Length(min = 1, max = 200)])
    body = TextAreaField('Body', [validators.Length(min = 30)])


# for Add Article
@app.route('/addArticle.html',methods=['GET', 'POST'])
def addArticle():
    form = ArticleForm(request.form)
    if request.method == 'POST' and form.validate():
        title = form.title.data
        body = form.body.data 
        
        #create cursor
        cur = cnx.cursor()
        
        # execute
        cur.execute("insert into articles (title, article) values(%s, %s)",(title, body))
        
        # commit to db
        cnx.commit()
        
        # close connection
        cur.close()
        
        flash('Article created', 'success')
        
        return redirect(url_for('artilcles'))
    
    return render_template('addArticle.html', form=form)

#Edit article
@app.route('/editArticle/<string:id>',methods=['GET', 'POST'])
def editArticle(id): 
    
    # create cursor
    cur = cnx.cursor()
    
    # get article by id
    cur.execute("SELECT * FROM articles WHERE articleID = %s ", [id])
    
    #fetch all articles
    article = cur.fetchone()
    
    # get form    
    form = ArticleForm(request.form)
    
    # populate article form fields
    form.title.data = article[1]
    form.body.data = article[2]
    
    if request.method == 'POST' and form.validate():
        title = request.form['title']
        body = request.form['body'] 
        
        #create cursor
        cur = cnx.cursor()
        # app.logger.info(title)  
        
        # execute
        cur.execute("UPDATE articles SET title = %s, article = %s WHERE articleID = %s ", (title, body, id))
        
        # commit to db
        cnx.commit()
        
        # close connection
        cur.close() 
        
        flash('Article Updated', 'success')
        
        return redirect(url_for('artilcles'))
    
    return render_template('editArticle.html', form=form)

# Delete Article
@app.route('/deleteArticle/<string:id>',methods=['GET', 'POST'])
def deleteArticle(id):
    # create cursor
    cur = cnx.cursor()
    
    # Delete article by id
    cur.execute("DELETE FROM articles where articleID = %s ", [id])
    
    # commit to db
    cnx.commit()
    
    # close connection
    cur.close()
    
    flash('Article Deleted', 'success')
    
    return redirect(url_for('artilcles'))


# "debug=True" for to get rid of restarting server (python app.py)
if __name__ == '__main__':
    app.secret_key = 'secret123'
    app.run(debug=True)    