# Learn Htaccess

## Force HTTPS

That will check if `HTTPS` off and redirect every single Character and any number of them to https

```apacheconf
RewriteEngine On
RewriteCond %{HTTPS} !on
RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URL}/htaccess/main.php

# it's also recommended to enable HTTPS Strict Transport Security (HSTS)

# which help to prevent man-in-the-middle attack and force all connection in http to secure protocol https

 Header always set Strict-Transport-Security "max-age=31536000;includeSubDomains"

```
