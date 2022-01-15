FROM prestashop/prestashop:1.7

#RUN rm -rf *

# --------------- Removing Unused Files ---------------

RUN rm -rfd /var/www/html/install

# --------------- COPY SHOP ---------------
COPY shop/ /var/www/html/
COPY ssl/ /etc/apache2/sites-available

# --------------- SET PRIVELAGES ---------------

RUN chmod -R 755 /var/www/html 
RUN chown -R www-data:www-data /var/www/html

# --------------- ENABLE SSL --------------- 

RUN a2enmod ssl
RUN service apache2 restart

# --------------- Setting Private Ports --------------- 
EXPOSE 443
EXPOSE 80