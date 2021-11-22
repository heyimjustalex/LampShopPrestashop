import csv

from bs4 import BeautifulSoup
from requests import get
from requests_html import HTMLSession

from LampProduct import LampProduct


class LampService:
    lamps = []
    allLinksLamp = []
    pageMain = 0
    sesion = HTMLSession()
    URL:str

    def __init__(self):
        self.URL = 'https://light-home.pl/2-lampy'

        self.lamps = []
        self.allLinksLamp = []

        page = get(self.URL)

        self.pageMain = BeautifulSoup(page.text, 'html.parser')

    def ParesUrlToHtml(self,URL2: str):
        r = self.sesion.get(URL2)
        r.html.render()
        return r

    def GetAllLinkLamps(self):
        page = 1
        i = 0;
        while (page < 90):
            URLProduct = self.URL + "#/page-" + str(page)
            print("Page->{0}".format(page))
            pageProduct = self.ParesUrlToHtml(URLProduct)
            for product in pageProduct.html.find('.product-name', first=False):
                links = product.links
                for link in links:
                    self.allLinksLamp.append(link)
                    i = i+1
            if(i>500):
                break;
            page = page + 1

    def PrintAllLinks(self):
        print(self.allLinksLamp)

    def PrintAllNameProduct(self):
        id = 0
        for link in self.allLinksLamp:
            id = id +1
            page = get(link)
            bs = BeautifulSoup(page.content, 'html.parser')
            nameLamp = bs.find('h1', class_='heading kp-prodtitle').get_text()
            priceB = self.FormatPrice(bs.find('span', {"id": "our_price_display"}).get_text())
            priceN = self.BruttoToNetto(23,priceB)
            imageLink = bs.find('a', class_="span_link no-print shown replace-2x")['href']
            category = self.test(bs)
            print(category)
            #category = "Lamp," + categorys[1]+","+categorys[2]
            #width = bs.find('div', class_="pa_content")
            descriptionProduct = self.getDescription(str(bs.find('div', class_='pa_content').find('div', class_="rte")))
            ##id,name,price,category,width,height,descirption

            newLamp = LampProduct(id,nameLamp,priceN,priceB,category,0,0,descriptionProduct,imageLink)
            self.lamps.append(newLamp)

    def FormatPrice(self,price:str):
        return price.split()[0]

    def getDescription(self,text):
        return text.replace('<div class="rte">', '').replace('</div>', '')

    def saveToFile(self):
        result = []
        header = ["Product ID","Name *","price netto","price brutto","Supplier","Description","Image","Cout","TaxID","Category"]
        result.append(header)
        for i in self.lamps:
            result.append(i.toList())
        # dopisac .csv
        with open('Lamp' + '.csv', 'w', newline='',encoding="utf-8") as f:
            writer = csv.writer(f, delimiter=';')
            writer.writerows(result)

    def BruttoToNetto(self,podatek,price)->float:
        price2 = price.replace(",",".")
        price3 = float(price2)
        return str(round(price3/100*(100-podatek),2)).replace(".",",")

    def test(self,bs):
        try:
            category = bs.find('section', class_='breadcrumb').get_text().split(">")[2]
            return category
        except IndexError:
            return "Plafony nowoczesne"