import csv

from bs4 import BeautifulSoup
from requests import get

from Category import Category


class CategoryService:
    categorys = []
    id = 10
    URL:str

    def __init__(self):
        self.URL = 'https://light-home.pl/2-lampy'

    def FindAllCategory(self,strona,url):
        page = get(url)
        bs = BeautifulSoup(page.content, 'html.parser')
        allCategory = bs.find_all('a', class_='subcategory-name')
        for cat in allCategory:
            self.id= self.id +1
            link = str(cat).split()[2].split("=")[1].replace("\"","")
            name = str(cat).split("=")[3].split("\"")[1]
            parentCategory = strona
            #print("{0}->{1}->{2}->{3}".format(self.id,link,name,parentCategory))
            cat = Category(self.id,name,parentCategory)
            self.categorys.append(cat)
            self.FindAllCategory(name,link)

    def saveToFile(self):
        result = []
        header = ["id","name","parentCategory","nameUrl"]
        result.append(header)
        for i in self.categorys:
            result.append(i.toList())
        # dopisac .csv
        with open('Category' + '.csv', 'w', newline='',encoding="utf-8") as f:
            writer = csv.writer(f, delimiter=';')
            writer.writerows(result)