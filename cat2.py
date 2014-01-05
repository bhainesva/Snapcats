import re
import urllib2
from bs4 import BeautifulSoup
import urllib
from random import choice

hdr = { 'User-Agent' : 'It scrapes for pictures idk' }
url = 'http://www.reddit.com/r/catpictures'
conn = urllib2.urlopen(urllib2.Request(url, headers=hdr))
html = conn.read()
soup = BeautifulSoup(html)
a = []
for elem in soup.findAll('a', href=re.compile('\.imgur\.com/[a-zA-Z0-9]')):
	a.append(elem['href'])
	#print a

url = 'http://www.reddit.com/r/catpictures/?count=25&after=t3_1u5r74'
conn = urllib2.urlopen(urllib2.Request(url, headers=hdr))
html = conn.read()
soup = BeautifulSoup(html)
for elem in soup.findAll('a', href=re.compile('\.imgur\.com/[a-zA-Z0-9]')):
	a.append(elem['href'])
	#print elem['href']

url = 'http://www.reddit.com/r/catpictures/?count=75&after=t3_1u0dwn'
conn = urllib2.urlopen(urllib2.Request(url, headers=hdr))
html = conn.read()
soup = BeautifulSoup(html)
for elem in soup.findAll('a', href=re.compile('\.imgur\.com/[a-zA-Z0-9]')):
	a.append(elem['href'])
	#print elem['href']

a = list(set(a))

url_final = choice(a)
urllib.urlretrieve(url_final, "snapcat.png.png")