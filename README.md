# php-cms
fix litebox
fix susmitar font change
fix form validation of default.php 
fix sweetalert
fix active class add
fix prevent  page a icon problem
fix footer 
fix 404 page
fix comming soon page (bold color change)
fix main.css a import
fix adminstratator ar place a username
fix browse button in adminpanel change
fix compress susmita  main img
fix fontaswome load
fix susmita page fix
fix Social Media 
fix video player on home page 
fix Privacy Pilocy, About Us,
fix our serveices Feature Devolop
fix 404 link 
fix video player in video
fix nodiar centre add at centre and map
fix Doctor Image Change
browse botton ar lekha change
fix Image UpLoaded Feature Devolop
Fix image path store
Apostropies Fix
.php extention hide 
preload
darkmode
how to use gitignore
Use WebPack For Converting Multiple Js Files To One Js File 
dynamically update links of domain and foldername
--------------------------------------------
RewriteEngine on
RewriteCond %{THE_REQUEST} /([^.]+)\.php [NC]
RewriteRule ^ /%1 [NC,L,R]

RewriteCond %{REQUEST_FILENAME}.php -f
RewriteRule ^ %{REQUEST_URI}.php [NC,L]

