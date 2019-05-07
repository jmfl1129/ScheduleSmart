import urllib

import googlemaps
import sys
import requests
import json
import re
from datetime import datetime

gmaps = googlemaps.Client(key='AIzaSyDCaclIkaPmL6tsZ48huhkcn3crBRpJ2sQ')
api_key='AIzaSyDCaclIkaPmL6tsZ48huhkcn3crBRpJ2sQ'

#TODO delete dummy data
origin='Washington,DC'
destination='New+York+City'

# getting URL
def composeURL(origin,destination):
    gmapsURL = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins="
    gmapsURL += origin
    gmapsURL += "&destinations="
    gmapsURL += destination
    gmapsURL += "&key="
    gmapsURL += api_key

    return gmapsURL

# download data
def dataDL(gmapsURL):
    f = urllib.urlopen(gmapsURL)
    gmapsJson = json.load(f)
    f.close()
    return gmapsJson

gmapsURL = composeURL(origin,destination)
gmapsJson = dataDL(gmapsURL)

timeValue = gmapsJson['rows'][0]['elements'][0]["duration"]["value"]

print('time to destination in seconds is ' + str(timeValue))
print (gmapsJson)