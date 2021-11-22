class LampProduct:
    idProduct:int
    nameLamp:str
    priceNetto:float
    priceBrutto:float
    category:str
    manufacturer = "Light Home"
    width:float
    height:float
    description:str
    cout:float = 100
    linkImage:str
    taxId = 5

    def __init__(self,id,name,priceN,priceB,category,width,height,descirption,img):
        self.idProduct = id
        self.nameLamp = name
        self.category = category
        self.priceNetto = priceN
        self.priceBrutto = priceB
        self.width = width
        self.height = height
        self.description = descirption
        self.linkImage = img

    def toList(self):
        return [self.idProduct,self.nameLamp,self.priceNetto,self.priceBrutto,self.manufacturer,self.description,self.linkImage,self.cout,self.taxId,self.category]

