server {
    listen 80;
    server_name www.$host;
    return 301 https://www.$host;
}

server {
    listen 443 ssl default_server;
    listen [::]:443 ssl default_server;

	ssl_certificate /extraFiles/certificado.crt;
    ssl_certificate_key /extraFiles/privada.key;

	root /var/www/html/wordpress;

	index index.php index.html;

	server_name www.$host;

    location ~ /\.ht {
        deny all;
    }
    error_page 404 /404.html;

	location ~ \.php$ {
		include snippets/fastcgi-php.conf;
		fastcgi_pass 127.0.0.1:9000;
	}
}

