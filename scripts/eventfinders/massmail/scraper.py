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

#getting html of each message

for message in urllist:
    page = urllib2.urlopen(message).read()
    soup = BeautifulSoup(page)
    print soup



    #have to search for events usiing scrapy