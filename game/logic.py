# from flask import Flask
#
# app = Flask(__name__)
#
# @app.route("/output")
# def output():
#     return "Hello World"
import locale
import time

locale.setlocale(locale.LC_ALL, '')
treasury = 100000
while True:
    f = open("treasury.txt", "w")
    time.sleep(3)
    treasury = treasury-3424
    print(treasury)
    f.write(locale.currency(treasury, grouping=True))
    f.close()
