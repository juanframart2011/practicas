'''from bs4 import BeautifulSoup
import requests
import pandas as pd

URL = 'https://yespornplease.com'
response = requests.get(URL)
soup = BeautifulSoup(response.text, 'html.parser')

print (soup)'''

from bs4 import BeautifulSoup

import requests

r  = requests.get("https://yespornplease.com")

data = r.text

soup = BeautifulSoup(data, 'html.parser')

#print(soup.prettify())
#print( soup.find_all('a') )

for link in soup.find_all('a'):

	print(link.text)
    #urls_activas = link.get( 'href' )
    #print(urls_activas.prettify())
    #r_b  = requests.get("https://yespornplease.com"+urls_activas)

	#data_b = r_b.text

	#soup_b = BeautifulSoup(data_b, 'html.parser')
    #print urls_activas
    #print(link.get('href'))