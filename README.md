# starter-mvc-app
Starter Phalcon MVC app

#virtual host settings
<VirtualHost *:80>    
	DocumentRoot "C:/xampp/htdocs/phalcon-start/public/"
    	ServerName www.phalcon-start.com:80
	<Directory "C:/xampp/htdocs/phalcon-start/public/">
		RewriteEngine on
		# If a directory or a file exists, use the request directly
		RewriteCond %{REQUEST_FILENAME} !-f
    		RewriteCond %{REQUEST_FILENAME} !-d
		# Otherwise forward the request to index.php
		RewriteRule . index.php        	
	</Directory>
</VirtualHost>
