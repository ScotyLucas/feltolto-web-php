## Web Feltöltő egyedi elérési  úttal Linux-ra.

## 1. Telepíteni kell a PHP 8.2-es verziót.


## 2. Majd hozd létre egy fájlt:
    sudo mkdir /var/www/feltolto && cd /var/www/feltolto

## 3. Hozd létre egy index.html-t:
    sudo nano index.html

## 4. Másold bele a kódot githubon található index.html-ből

## 5. Majd hozzunklétre egy upload.php-t:
    sudo nano upload.php

## 6. Másoljuk be a php kódot az upload.php-ból

## 7. Ha szeretnéd használd ezt a style.css-t, de nem muszály.

### NGINX .conf fájl létrehozása

## 1. Hozd létre a .conf-ot:
    sudo nano /etc/nginx/sites-available/upload.conf

## 2. Másold be guthubról a kódot a upload.conf-ból

## 3. Majd linkeljük a conf fájlt:
    sudo ln -s /etc/nginx/sites-available/upload.conf /etc/nginx/sites-enabled/

## 4. Teszteljük le konfigurációt:
    nginx -t
## Amennyiben ez jön vissza:

    nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
    nginx: configuration file /etc/nginx/nginx.conf test is successful
## Akkor jó lett

## 5. NGINX restart
    sudo systemctl reload nginx
