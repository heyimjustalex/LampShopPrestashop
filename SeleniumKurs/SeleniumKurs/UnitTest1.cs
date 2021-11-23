using NUnit.Framework;
using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
using OpenQA.Selenium.Interactions;
using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Text.RegularExpressions;
using System.Threading;

namespace SeleniumKurs
{
    public class Tests
    {
        IWebDriver driver;

        [SetUp]
        public void Setup()
        {
            ChromeOptions options = new ChromeOptions();
            options.AddArguments("--start-maximized");
            options.AddArguments("ignore-certificate-errors");
            //new ChromeDriver przyjmuje sciezke do pliku z chromedriverem jesli pobieramy go z internetu, jesli za pomoca nugeta to nie trzeba :)
            driver = new ChromeDriver(options);
        }

        [Test]
        public void Test1()
        {
            for (int z = 0; z < 2; z++)
            {
                driver.Navigate().GoToUrl("https://localhost:8001/");
                //Przejscie do asortymentu
                IWebElement ele = driver.FindElement(By.XPath("//li[@id='category-2']/a"));
                Actions action = new Actions(driver);
                action.MoveToElement(ele).Perform();
                if (z == 0)
                {
                    driver.FindElement(By.XPath("//li[@id='category-3']/a")).Click();
                }
                else
                {
                    driver.FindElement(By.XPath("//li[@id='category-10']/a")).Click();
                }
                //Przypisanie znalezionych produktów do kolekcji
                ReadOnlyCollection<IWebElement> produkty = driver.FindElements(By.CssSelector("div[class='products row']>div[class='product']"));
                List<String> founded = new List<String>();
                foreach (IWebElement p in produkty)
                {
                    string text = p.Text.Split("\n")[0];
                    //idk why ale split zostawia jeden enter ktorego trzeba sie pozbyc
                    text = text.Remove(text.Length - 1);
                    Regex rx = new Regex(".*(Kinkiet|Lampa).*");
                    if (rx.IsMatch(text))
                    {
                        founded.Add(text);
                    }
                }
                string url = driver.Url;
                //Znalezienie produktów i dodanie do koszyka
                int iloscProduktow = 5;
                foreach (string f in founded)
                {
                    if (iloscProduktow == 0)
                    {
                        break;
                    }
                    //wejdz do produktu
                    driver.FindElement(By.LinkText(f)).Click();
                    //losuj ilosc
                    Random rnd = new Random();
                    int ileProduktow = rnd.Next(1, 10);
                    Console.WriteLine("ilosc: {0}", ileProduktow);
                    //zwieksz ilosc produktu
                    for (int i = 1; i < ileProduktow; i++)
                    {
                        driver.FindElement(By.CssSelector("[class='btn btn-touchspin js-touchspin bootstrap-touchspin-up']")).Click();
                    }
                    //dodaj do koszyka
                    driver.FindElement(By.CssSelector("[data-button-action='add-to-cart']")).Click();
                    Thread.Sleep(100);
                    //wroc na strone z reszta produktow
                    driver.Navigate().GoToUrl(url);
                    iloscProduktow--;
                }
            }
            //wejdz do koszyka
            driver.FindElement(By.Id("_desktop_cart")).Click();
            //usun 1 produkt
            int attempts = 50;
            while (attempts > 0)
            {
                try 
                { 
                    driver.FindElement(By.CssSelector("[class='remove-from-cart']")).Click();
                    break;
                }
                catch (StaleElementReferenceException e)
                {
                }
                attempts--;
            }
            //przejdŸ do realizacji zamówienia
            driver.FindElement(By.ClassName("btn-primary")).Click();
            //wybór pól
            driver.FindElement(By.ClassName("radio-inline")).Click();
            driver.FindElement(By.Id("field-firstname")).SendKeys("Janusz");
            driver.FindElement(By.Id("field-lastname")).SendKeys("Biznesmen");
            driver.FindElement(By.Id("field-email")).SendKeys("Dziubich@Kubale.com");
            driver.FindElement(By.Id("field-password")).SendKeys("piwospecjal");
            driver.FindElement(By.Id("field-birthday")).SendKeys("1970-05-31");
            driver.FindElement(By.Name("customer_privacy")).Click();
            driver.FindElement(By.Name("psgdpr")).Click();
            driver.FindElement(By.Name("continue")).Click();
            //drugi etap
            driver.FindElement(By.Id("field-address1")).SendKeys("ul Politechniczna");
            driver.FindElement(By.Id("field-postcode")).SendKeys("80-800");
            driver.FindElement(By.Id("field-city")).SendKeys("Gdansk");
            driver.FindElement(By.Id("field-phone")).SendKeys("997997997");
            driver.FindElement(By.Name("confirm-addresses")).Click();
            //wybor dostawy
            driver.FindElement(By.Id("delivery_option_8")).Click();
            //chinski kod do scrollowania w dol bo inaczej potezny button sie krzaczy XD
            IJavaScriptExecutor js = (IJavaScriptExecutor)driver;
            js.ExecuteScript("window.scrollTo(0, 300)");
            driver.FindElement(By.Name("confirmDeliveryOption")).Click();
            //wybor platnosci
            js.ExecuteScript("window.scrollTo(0, 400)");
            driver.FindElement(By.Id("payment-option-9")).Click();
            driver.FindElement(By.Id("conditions_to_approve[terms-and-conditions]")).Click();
            Thread.Sleep(100);
            driver.FindElement(By.CssSelector("button.btn.btn-primary.center-block")).Click();
            //wejscie w szczegoly zamowienia
            driver.FindElement(By.ClassName("account")).Click();
            driver.FindElement(By.Id("history-link")).Click();
            driver.FindElement(By.CssSelector("a[data-link-action='view-order-details']")).Click();
        }

        [TearDown]
        public void QuitDriver()
        {
            Thread.Sleep(10000);
            driver.Quit();
        }
    }
}

