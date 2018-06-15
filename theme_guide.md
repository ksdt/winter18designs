# Winter18Design Theme Structure

This WordPress theme, like our last one, is based on a template from Underscores.me

Most of the content comes from the Cogs design team who made their site using HTML + CSS (and a few JS/CSS libraries).  This content can be found [here](https://github.com/ConnieGuan/KSDT)

In order to adapt their code for a WordPress, it needs to be converted into PHP and also needs to follow WordPress design patterns.  As an example, CSS/JS files are generally not loaded by the page that needs them (barring a few exceptions) and instead are loaded through the file functions.php

In order to make the theme for maintainable and less rigid, PHP loops are often used to add elements to a page.  As an example, the Cogs code may have a bunch of div elements for objects in a slider.  In the theme, there is just one element in a PHP for loop to generate them all.  This allows for more flexibility in modify various parts of the website.  

Pages that have content that is taken directly from the cogs design often is left intact with no extra styling.  Content that I had to make myself is often styled inline because I do not know the best practices for adding styles to style.css, though there are some exceptions.  I added a lot of default WordPress styles to the file.  In general, everything at the end of style.css is my own added styles.  A lot of pages used large splashes, and for these, I lifted the style from the “about” page splash.  In the code, this class is “about-hero”.  Many of the splashes I made use this one with extra inline styling needed for each page.

## Plugins
This theme makes extensive use of a few plugins in order to achieve certain functionality and make the site easy to edit.

### Ajaxify Wordpress Site
This plugin is used to make the site only reload the content below the header.  This is because the audio stream player is in the header, so changing page would break the stream.  In the options page for this plugin, these are the settings:

### Ajax container ID: content
Menu container class: nav-pos navbar navbar-default navbar-fixed-top
Search form : searchform (we don’t use this)
Transition and scroll effects can be enabled

### Advanced Custom Fields
This plugin is used to give key-value stores to various pages.  This is often used for content that changes on occasion such as staff members, their hours, links to applications, and images.  Anytime a php file in the theme uses the statement:
`the_field(‘some_string’);`
It is getting the value from that key (‘some_string’) and placing that content exactly where it was called.

### Radio Buttons for Taxonomies
This plugin is just used to only allow posts to have one category.  Categories should be checked in the settings page for this plugin.  This is because having only one category essentially allows us to have set post types.  Our old theme created custom post types for things such as ‘weekly reviews’, ‘concert picks’, etc.  Having only one category allows us to categorize posts in this same way, and without having to code each post type into the theme.
