server {

    listen 80;
    # listen 81;
	root /var/www/yeraygonzalez.com/;
    index juan.php juan.html;
	server_name yeraygonzalez.com www.yeraygonzalez.com;
    autoindex on;
    location ~ /\.ht {
        deny all;
    }
    error_page 404 /404.html;
    location /directorio1 {
        alias /home/yeray/prueba1;
    }

    location /descargas {
        disable_symlinks off;
        deny 192.168.100.100;
    }

    location /privado {
        auth_basic "Acceso restringido";
        auth_basic_user_file /extraFiles/.htpasswd;
    }

    access_log /var/log/nginx/accesos.log;
    error_log /var/log/nginx/errores.log;

}


server {

    listen 80;
	root /var/www/html/;
    index index2.html index2.php;
	server_name host2.yeraygonzalez.com;
    autoindex on;
    location ~ /\.ht {
        deny all;
    }
    access_log /var/log/nginx/host2_accesos.log;
    error_log /var/log/nginx/host2_errores.log;

}

server {

    listen 80;
	root /var/www/html/;
    index index1.html index1.php;
	server_name host1.yeraygonzalez.com;
    autoindex on;
    location ~ /\.ht {
        deny all;
    }
    access_log /var/log/nginx/host1_accesos.log;
    error_log /var/log/nginx/host1_errores.log;

}
