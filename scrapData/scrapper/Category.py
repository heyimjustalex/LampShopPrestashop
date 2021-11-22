class Category:
    Id:int
    Name:str
    ParentCategory:str
    Url:int

    def __init__(self,id,name,parentCategory):
        self.Id = id
        self.Name = name
        self.ParentCategory = parentCategory
        self.Url = id

    def toList(self):
        return [self.Id,self.Name,self.ParentCategory,self.Url]