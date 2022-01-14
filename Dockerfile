FROM prestashop/prestashop:1.7
# --------------- Setting Shop and SSL Files --------------- 
RUN rm -rf *

COPY shop/ /var/www/html/
COPY ssl/ /etc/apache2/sites-available


RUN chown -R www-data:root /var/www/html

# --------------- RUN COMMANDS --------------- 

RUN a2enmod ssl
RUN service apache2 restart

# --------------- Setting Private Ports --------------- 
EXPOSE 80 443

# --------------- Removing Unused Files ---------------

CMD rm -rfd /var/www/html/install