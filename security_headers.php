<IfModule mod_headers.c>
Header set X-Frame-Options "DENY"
Header set X-XSS-Protection "1; mode=block"
Header set X-Content-Type-Options "nosniff"
</IfModule>
