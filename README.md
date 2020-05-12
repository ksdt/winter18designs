# winter18designs
### Setting up the development environment for a Wordpress Site

To run the wordpress site locally, we use Varying Vagrant Vagrants (VVV).
VVV is essentially a dev environment and a server(in a virtual machine).

(Everything in this document comes from the Software Requirements and Installation pages 
from the Getting Started section at https://varyingvagrantvagrants.org/)

To use VVV, we need some additional software:
  - Vagrant 2.x (the newest version is fine)
  -- https://www.vagrantup.com/downloads.html
  - VirtualBox (the latest version will do)
  --https://www.virtualbox.org/wiki/Downloads 

### After installing Vagrant and VirtualBox
Run this command to install some needed plugins, it's possible
VVV may complain later on about conflicts, if so, just uninstall the
plugin that is conflicting and the problem should resolve.
```sh
$ vagrant plugin install vagrant-hostsupdater vagrant-vbguest
```
After this, consider rebooting your machine to be safe the install was configured properly

### Installing VVV
Run this command, feel free to change the location and name of the folder to what you want
```sh
$ git clone -b master git://github.com/Varying-Vagrant-Vagrants/VVV.git ~/ksdt-local
```
### Initial Configuartion
Once everything is installed, run this command **within** the VVV folder you specified above
```sh
$ vagrant up
```
to create a virtual machine and local environment.
The first time this is ran it will take a while as a lot of software needs
to be installed on the virtual machine, but future runs will only take
a few seconds. **Note:** Make sure you have your CPU's virtualization technology turned on in the BIOS.

### Seeing the local site
Go to [vvv.test] in a browser to verify the site is up.
It will give you more links to go to: [one.wordpress.test], [two.wordpress.test]. For our purposes, we will be using `one.wordpress.test`, although it does not matter which of the two you pick.

You can sign into wordpress via [one.wordpress.test/wp-admin]. If it does not
ask you for basic sign-up instructions, the default *user:pass* is `admin:password`

### Seting up the theme
Clone this repo into the vagrant folder you created above
```sh
$ git clone [repo-url] ~/ksdt-local/www/wordpress-one/public_html/wp-content/themes
```
You can then go into the wordpress backend ([one.wordpress.test/wp-admin]),
navigate to Appearance->Themes and select the theme "winter18redesign"

Finally, after you have logged into Wordpress, install the plugin "All-In-One WP Migration and activate it. Get in touch the with Computer Engineer to have him or her export a current KSDT site that will be used for local development. 

   [one.wordpress.test]: <http://one.wordpress.test>
   [one.wordpress.test/wp-admin]: <http://local.wordpress.test/wp-admin>
   [vvv.test]: <http://vvv.test>
