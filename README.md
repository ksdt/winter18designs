# winter18designs
### Setting up the development environment for a Wordpress Site

To run the wordpress site locally, we use Varying Vagrant Vagrants (VVV).
VVV is essentially a dev environment and a server(in a virtual machine).

(Everything in this document comes from the Software Requirements and Installation pages 
from the Getting Started section at https://varyingvagrantvagrants.org/)

To use VVV, we need some additional software:
  - Vagrant 2.x (the newest version is fine)
  -- https://www.vagrantup.com/downloads.html
  - VirtualBox (5.1, newer versions will not work with VVV)
  --https://www.virtualbox.org/wiki/Download_Old_Builds_5_1 

### After installing Vagrant and VirtualBox
Run this command to install some needed plugins, its possible
VVV may complain later on about conflicts, if so, just uninstall the
plugin that is conflicting and the problem should resolve.
```sh
$ vagrant plugin install vagrant-hostsupdater vagrant-vbguest
```
After this, considering rebooting your machine to be safe the install is configuring properly

### Installing VVV
Run this command, feel free to change the location and name of the folder to what you want
```sh
$ git clone -b master git://github.com/Varying-Vagrant-Vagrants/VVV.git ~/vagrant-local
```
### Initial Configuartion
Once everything is installed, run this command within the VVV folder
```sh
$ vagrant up
```
to create a virtual machine and local environment.
The first time this is run will take a while as a lot of software needs
to be installed on the virtual machine, but future runs will only take
a few seconds.

### Seeing the local site
Go to [vvv.test] in a browser to verify the site is up.
It will give you more links to go to, in particular,
[local.wordpress.test], which is the local wordpress site.

You can sign into wordpress via [local.wordpress.test/wp-admin]
It will ask you some basic setup info(username,lang,etc).  What you put does not matter too much since it is exclusive to your machine.

### Seting up the theme
Clone this folder into
```sh
[your_vagrant_folder]/www/wordpress-default/public_html/wp-content/themes
```
You can then go into the wordpress backend ([local.wordpress.test/wp-admin]),
navigate to Appearance->Themes and the theme should already be installed if you cloned it properly.  
Everything is now setup and you can begin working on the theme.

   [local.wordpress.test]: <http://local.wordpress.test>
   [local.wordpress.test/wp-admin]: <http://local.wordpress.test/wp-admin>
   [vvv.test]: <http://vvv.test>