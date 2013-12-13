#Infogeek Admin Themes
> __Contributors__ : Konstantinos_Tsatsarounos

>__Tags__ : admin, color, theme, admin theme, admin color, backend, backend theme, new admin ui

>__Requires at least__: 3.8

>__Tested up to__ : 3.8

>__Stable tag__ : 1.0

>__License__ : GPLv2 or later

>__License URI__ : http://www.gnu.org/licenses/gpl-2.0.html

Add three new themes on the new wordpress admin user interface!

###Description
Add three new color themes in the admin UI of version 3.8 of wordpress.  Is not supported for real in previous versions.

####The color themes are the the following:

####Infogeek Clear 

Has the white as main color and blue as highlight. Is very clear theme for you backend, if you don\' like so much the high contrast.

####Infogeek High Contrast

Has a main color of greenblue ( like the sea ), secondary highlight colors of blue and black. Clear and helps much with distinction amount the different sections of the backend user interface.

####XTND ( Extend )

A theme very close to the default theme but uses magenta instead of blue! Very nice looking variation!


*__Also :__*

>For a little bonus. I have added, a folder within colors folder of the plugin called base-files. This folder contains the necessary files for you to generate new themes. Of course these files, at least the originals,  exist inside the colors folder within admin css. But i sense these will help you to make the work a little faster than the originals!

###Installation
+ Upload to your plugins folder or install it  directly from wordpress
+ Activate it
+ Go to Users -> Your Profile and find the extra themes!


###Frequently Asked Questions
####How can add a new theme within the plugin
>I dont recomment that because, you risk to loose your changes with an accidental update! But is fairly straight forward. You need to add a new wp_admin_css_color inside function infogeek_add_admin_themes ( look the others and just put you names and colors ).
Secondly, you must go to the base-files folder. Change the variables  inside colors.scss and follow the instructions in readme.txt inside the folder.
Then just, create a new folder inside colors and copy/paste the new files from theme to your newly created folder. If you don\'t make any mistake, you are done!


####Screenshots
>__Infogeek Clear__

![Infogeek Clear](http://i111.photobucket.com/albums/n131/silversoldier_real/screenshot-1_zps1a14ba61.jpg)

>__Infogeek High Contrast__

![Infogeek High Contrast](http://i111.photobucket.com/albums/n131/silversoldier_real/screenshot-2_zpsc303e8bb.jpg)

>__XTND__

![XTND](http://i111.photobucket.com/albums/n131/silversoldier_real/screenshot-3_zpsced2c6bb.jpg)
