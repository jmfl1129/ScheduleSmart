# import libraries


import urllib2
from bs4 import BeautifulSoup
import requests

#change date to get different mass mails

date = '20190510'
base = 'http://cumassmail.itsc.cuhk.edu.hk/weekly/Digest/List/UG/'


#getting all the messages in the mail
urllist = []
url = base + date
response = requests.get(url)
data = response.text
soup = BeautifulSoup(data, 'html.parser')
tags = soup.find_all('a')
for tag in tags:
    messageurl = 'http://cumassmail.itsc.cuhk.edu.hk'+ tag.get('href')
    urllist.append(messageurl)
print urllist

#getting html of each message
for murl in urllist:
    mresponse = requests.get(murl)
    data = mresponse.text
    msoup = BeautifulSoup(data, 'html.parser')
    print msoup

    #have to search for events usiing scrapy