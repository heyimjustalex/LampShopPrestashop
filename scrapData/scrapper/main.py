import requests_html
from bs4 import BeautifulSoup
from requests import get
from requests_html import HTMLSession
import datetime

from CategoryService import CategoryService
from LampService import LampService

import datetime
start = datetime.datetime.now()

CS = CategoryService()
CS.FindAllCategory("Strona Główna","https://light-home.pl/2-lampy")
CS.saveToFile()

LS = LampService()
LS.GetAllLinkLamps()
LS.PrintAllNameProduct()
LS.saveToFile()
duration = datetime.datetime.now() - start
print(duration)
