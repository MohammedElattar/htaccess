# Learn Htaccess

## Force HTTPS

That will check if `HTTPS` off and redirect every single Character and any number of them to https

```apacheconf
RewriteEngine On
RewriteCond %{HTTPS} !on
RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI}

# it's also recommended to enable HTTPS Strict Transport Security (HSTS)

# which help to prevent man-in-the-middle attack and force all connection in http to secure protocol https

 Header always set Strict-Transport-Security "max-age=31536000;includeSubDomains"

```

## Redirect back slashes in the end of url if the link is not a directory

```apacheconf
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} (.+)/$
RewriteRule ^ %1 [R=301,L]

```
