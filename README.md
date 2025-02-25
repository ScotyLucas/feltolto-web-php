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

### English

## 1. Install PHP 8.2
You need to install PHP 8.2 on your system.

## 2. Create a Directory
Run the following command to create a directory:

sudo mkdir /var/www/uploader && cd /var/www/uploader

## 3. Create an index.html File

sudo nano index.html

## 4. Copy the Code

Copy the code from the index.html file available on GitHub.

## 5. Create an upload.php File

sudo nano upload.php

## 6. Copy the PHP Code
Copy the PHP code from the upload.php file on GitHub.

## 7. (Optional) Use style.css
If you want, you can use style.css, but it's not mandatory.

### Creating the NGINX .conf File

## 1. Create the .conf File
sudo nano /etc/nginx/sites-available/upload.conf

## 3. Copy the Configuration
Copy the code from the upload.conf file available on GitHub.

## 3. Link the .conf File
sudo ln -s /etc/nginx/sites-available/upload.conf /etc/nginx/sites-enabled/

## 4. Test the Configuration
Run the following command to test the NGINX configuration:

nginx -t

## If the output is:

nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful
## Then everything is correctly configured.

## 5. Restart NGINX
sudo systemctl reload nginx
