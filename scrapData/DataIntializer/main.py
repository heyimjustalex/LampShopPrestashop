import re
import string
import time

from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import ChromiumOptions
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys


class Data_initalizer:
    chrome_PATH: string = "chromedriver.exe"
    service: Service
    driver: webdriver

    def __init__(self, browser: string):
        if browser == "chrome":
            options = ChromiumOptions()
            options.add_argument("--start-maximized")
            self.service = Service(self.chrome_PATH)
            self.driver = webdriver.Chrome(service=self.service, options=options)

    def open_browser(self, url: string):
        self.driver.get(url)
        return self.driver

    def site_admin_login(self, login: string, passwd: string):
        login_element = self.driver.find_element("id", "email")
        passwd_element = self.driver.find_element("id", "passwd")
        submit_element = self.driver.find_element("id", "submit_login")
        login_element.send_keys(login)
        passwd_element.send_keys(passwd)
        submit_element.click()

    def accept_risk(self):
        el = self.driver.find_element(By.CLASS_NAME, "mr-3")
        el.click()


    def choose_type_of_import(self):
        el = self.driver.find_element(By.ID, "entity")
        el.click()
        el.send_keys(Keys.DOWN, Keys.ENTER)

    def upload_csv_data(self, csv_file_path:string):
        el = self.driver.find_element(By.ID, "file")
        el.send_keys(csv_file_path)

    def set_switches(self):
        time.sleep(1)
        el = self.driver.find_element(By.ID, "truncate_1")
        el.click()
        el = self.driver.find_element(By.ID, "sendemail_0")
        el.click()

    def next_first_form(self):
        el = self.driver.find_element(By.NAME, "submitImportFile")
        el.click()
        time.sleep(2)

    def load_conf(self,which_conf:string):
        el = self.driver.find_element(By.ID, "valueImportMatchs")
        el.click()

        if which_conf == "categories":
            el.send_keys(Keys.DOWN,Keys.ENTER)
        #elif which_conf == "products":
        #we assume products conf are first option

        time.sleep(1)

        el = self.driver.find_element(By.ID,"loadImportMatchs")
        el.click()

    def import_final(self):
        el = self.driver.find_element(By.ID, "import")
        el.click()

    def accept_alert(self):
        alert = self.driver.switch_to.alert
        time.sleep(1)
        alert.accept()

    def get_tab_left_admin_pane(self, element_id: string):
        left_pane_element = self.driver.find_element("id", element_id)
        # print(left_pane_element.)
        return left_pane_element

    def get_token(self) -> string:
        url = self.driver.current_url
        token_not_clear = re.search("token.*$", url).group()
        token_cleared = re.search("=.*$", token_not_clear)

        token_cleared = (token_cleared.group())[1:]
        token_cleared = re.search("^.*#", token_cleared)
        token_cleared = (token_cleared.group())
        token_final_str: string = token_cleared[:len(token_cleared) - 1]
        print(url)
        print(token_not_clear)
        print(token_cleared)
        print(token_final_str)
        return token_final_str

    def import_products_process(self,products_csv_filepath:string):
        token = self.get_token()
        import_url: string = "https://localhost:8001/admin742rovy9v/index.php/configure/advanced/import/?_token="
        import_url +=token
        print(import_url)
        self.driver.get(import_url)
        time.sleep(3)
        self.accept_risk()
        time.sleep(2)
        self.choose_type_of_import()
        time.sleep(2)
        self.upload_csv_data(products_csv_filepath)
        self.set_switches()
        self.next_first_form()
        self.accept_alert()
        self.load_conf("products")
        time.sleep(2)
        self.import_final()

    def find_menu_click_search(self):
        el = self.driver.find_element(By.CLASS_NAME,"pstaggerAddTagInput")
        el.send_keys("menu")
        el.send_keys(Keys.ENTER)
        el = self.driver.find_element(By.CLASS_NAME,"dropdown-toggle-split")
        el.click()
        self.driver.get("https://localhost:8001/admin742rovy9v/index.php/improve/modules/manage/action/configure/ps_mainmenu?_token")
        #time.sleep(1)

        #el = el.find_element(By.CLASS_NAME, "dropdown-item")
        #el.click()
    def remove_items_category(self):
        el = self.driver.find_element(By.ID,"removeItem")
        el.click()

    def add_items_category(self):
        el = self.driver.find_element(By.XPATH,"//*[@id='availableItems']/optgroup[4]/option[3]")
        el.click()
        el = self.driver.find_element(By.ID,"addItem")
        el.click()
        el = self.driver.find_element(By.ID, "module_form_submit_btn")
        el.click()

    def add_categories_process(self):
        modules_manager: string = "https://localhost:8001/admin742rovy9v/index.php/improve/modules/manage?_token"
        self.driver.get(modules_manager)
        time.sleep(1)
        self.accept_risk()
        time.sleep(1)
        self.find_menu_click_search()
        time.sleep(1)
        self.accept_risk()
        time.sleep(1)
        self.remove_items_category()
        time.sleep(1)
        self.add_items_category()

    def import_categories_process(self,categories_csv_filepath:string):
        import_url: string = "https://localhost:8001/admin742rovy9v/index.php/configure/advanced/import"
        self.driver.get(import_url)
        time.sleep(3)
        self.accept_risk()
        time.sleep(2)
        self.upload_csv_data(categories_csv_filepath)
        self.set_switches()
        self.next_first_form()
        self.accept_alert()
        self.load_conf("categories")
        self.import_final()


if __name__ == '__main__':
    # service = Service(ChromeDriverManager().install())
    admin_name: string = "admin742rovy9v"
    admin_login: string = "admin@admin.com"
    admin_password: string = "admin123"
    products_csv_filepath = "\\home\\alex\\lampy3\\scrapper\\Lamp.csv"
    categories_csv_filepath = "\\home\\alex\\lampy3\\scrapper\\Category.csv"

    data_initalizer: Data_initalizer = Data_initalizer("chrome")

    def load_data():
        data_initalizer.open_browser("https://localhost:8001/" + admin_name)
        data_initalizer.site_admin_login(admin_login, admin_password)
        time.sleep(3)
        data_initalizer.import_categories_process(categories_csv_filepath)
        time.sleep(15)

        #data_initalizer.driver.implicitly_wait(33333)

        data_initalizer2:Data_initalizer = Data_initalizer("chrome")
        data_initalizer2.open_browser("https://localhost:8001/" + admin_name)
        data_initalizer2.site_admin_login(admin_login, admin_password)
        time.sleep(3)
        data_initalizer2.import_products_process(products_csv_filepath)
        time.sleep(333333)

    def bind_categories():
        data_initalizer.open_browser("https://localhost:8001/" + admin_name)
        data_initalizer.site_admin_login(admin_login, admin_password)
        time.sleep(3)
        data_initalizer.add_categories_process()
        time.sleep(8)

    ## First load data with load_data
    load_data()

    ## Then comment load_data() and uncomment bind_categories()
    #bind_categories()
