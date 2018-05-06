# winter18designs
## Setting up the development environment for a Wordpress Site

To run Wp locally, download and install VVV version 2.1
https://varyingvagrantvagrants.org/docs/en-US/installation/software-requirements/

Installing VVV entails install Vagrant and Virtual Box
The links for both are found on the link above.

You will need to have VirtualBox version 5.1 installed.
(5.2 is the current release, but it is not compatible with VVV)

After installing that software, you can install VVV here:
https://varyingvagrantvagrants.org/docs/en-US/installation/
(Git is probably the easiest way to install)
Note: Where you install VVV (git command ending with vagrant-local) is the directory that the
project will live, so run that command with the directory you want to store the site, as well
as the name of the folder you want.

Go through the instructions that it details about starting the virtual machine.

Once thats done, you can check that its up at vvv.test in any browser.

Then, clone this repo (using SSH) into www/wordpress-default/public_html/wp-content/themes.

You can install the theme at
local.wordpress.test/wp-admin
If you put the folder in themes, wordpress should see it and install it automatically,
you just need to activate it.

From there, you can work on the theme files and simply refresh to see changes.

##Current Work
1) Setup dynamic/lazy loading so that changing pages does not refresh the entire site and
stop the stream playback

2) Properly order CSS file loading to match the mock up

3) Tighten up the header