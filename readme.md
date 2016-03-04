# How to build a maintainable WP theme using the Vanilla Starter Theme

Although it is not a hard requirement, before beginning with this theme, we recommend you follow our "Local Dev Environment Setup Guide".  This guide will walk you through the process of getting a local PHP development environment setup on your computer.  If you already have your own local environment setup, or prefer to use something like MAMP (Mac) or WAMP (Windows), that will work too.  The main pre-requisite here is that you have a local development environment setup and know how to use it.


# Getting Started

The Vanilla Starter Theme by Code My Views is a WordPress theme that is aimed to make building custom WordPress theme much easier.  This guide will walk you through the different components of the theme and how to use it most effectively to develop your next WordPress theme.

To get started, you can simple clone this theme onto your local machine:

```
git clone git@github.com:chood531/wordpress-boilerplate.git ~/Code/sitename.dev
```

You should of course replace sitename.dev with the name of the site you are building.  Next, you should open the project in your favorite IDE/text editor.  We prefer Sublime text.

Within the project root, you will see a file called `.env.example`.  Create a copy of this file and name it `.env`.  Within the `.env` file, you need to update the config values to match the values of your local development environment.  Check out the "Local Dev Environment Setup Guide" if you have questions or issues about this.

Once you have the .env file created, you may want to rename the theme.  The theme is located in `~/Code/sitename.dev/public/wp-content/themes/base-theme`.  You can change the name of the `base-theme` folder to whatever name of your project is.

You will also need to setup your local dev environment to run the site.  You should configure your dev environment to point to: `~/Code/sitename.dev/public` as the web root for the project.  Once you do that, you will be able to visit http://sitename.dev/wp-admin to finish installing the WordPress theme on your local dev environment.

Once everything is setup, login to your site at http://sitename.dev/wp-admin with the username and password you created.  You will need to activate the starter theme by visiting the "Themes" section, and activating the Starter Theme.


# Pre-Requisites 

Before you can really benefit from this starter theme, you should have an already completed front end (HTML/CSS/JavaScript) of the site you are building.  This starter theme will simplify the process of taking the static HTML/CSS/JavaScript that you have created, and then integrating it into WordPress so that all of the content and pages are controlled via the WordPress CMS.

If you do not already have completed HTML/CSS, this theme may not be much help for you because it does not provide any pre-built front end.  This theme's main purpose is to provide a clean and easy to use starter point for the various components that are required to build a WP theme.

# Directory Structure

Here is a quick overview of the directory structure of this theme.

First, please note that within this project, we are not only including the Vanilla theme, but also WordPress core in its entirety.  As a best practice, you should never edit or delete any of the core WordPress files that exist in the `wp-admin` or `wp-includes` directory.  This is where all of the default WordPress magic exists, and there is no need to edit anything here.  In fact, editing files here may cause issues for you in the future in the event that you update the WordPress version because this will replace all files in `wp-admin` and `wp-includes` directories.  Also, as a general best practice, you should never edit core files in any project.

With that being said, all of your coding will happen within the theme itself.  The theme directory is in `wp-content/themes`.

Here is a quick overview of the directory structure of the theme:

+-- assets/ - All static assets
|   +-- compiled/ - This directory should largely be untouched by you.  This is where compiled assets end up.  More on this later. 
|   +-- js/ - Javascript files
|   |   +-- plugins/ - All JavaScript plugins your front end uses go here
|   |   +-- custom/ - All custom JavaScript or jQuery should go here
|   +-- sass/ - Default SASS directory (this can also be a less/ directory if your front end uses less).  You should place all of your SCSS or LESS files in this directory.
|   +-- images/ - Place all of the images from your front end into this directory.
|   +-- fonts/ - If your front end uses any custom fonts, you can place the font files in this directory.
+-- core/ - This is all of the core theme files.  This is where the magic of the Vanilla theme happens.
+-- endpoints/ - This is where we place any endpoints that are needed in the theme.  For example, if your theme has a contact form, you will likely create a file in this directory called contact-form.php.
+-- field-groups/ - This directory contain the code that generates the various Advanced Custom Fields that are needed in the theme
+-- views/ - All views for the theme
+-- forms/ - This is an optional directory where you can store any form partials
+-- layouts/ - Fundamental layouts of the templates
+-- partials/ - Various includes (Header, Footer, etc.)
+-- shortcodes/ - If your theme will have any custom shortcodes, you can place the template files for the shortcodes in this directory.
+-- sidebars/ - For any custom sidebars, you can place them in this directory.
+-- views/ - This is where all of the different views will go for your theme
+-- 404.php - the default 404 template for the Vanilla theme.  This can be customized as you see fit.
+-- functions.php - This file behaves just as a functions.php file would behave in any WordPress theme.  You can place any WP customization code here as needed
+-- gulpfile.js - This file is what we use to compile all of the JavaScript and SASS/LESS from the assets directory into the assets/compiled directory
+-- package.json - This file defines the Node.js packages that are required for the gulpfile to work correctly (more on this later)
+-- screenshot.png - This is the screenshot that appears on the theme activation page in wp-admin.  Feel free to replace this with any image you want.
+-- theme-config.php - The config file for Vanilla.  This is where the bulk of the configuration will happen for your theme.
+-- style.css - This is the default stylesheet.  You can update the name of the theme, and the author, in this file.

# Key Theme Components

In this section, you will learn about the key components that make up the Vanilla WordPress theme.  It is critical that you understand each of these terms as it will help you correctly model your static front end site into a completely dynamic WordPress theme.

## Laravel Blade Template Engine

The Vanilla theme uses the Laravel Blade template engine to power the theme files.  For more details on Blade, you can read the documentation here: https://laravel.com/docs/5.1/blade

Blade makes it much easier and faster to template out your static front end into the Vanilla WordPress theme by providing a much cleaner and fluid syntax.  If you are unfamiliar with Blade, you will learn to love it by the time you finish building your first theme with Vanilla.

## Layouts

Take a look at your HTML files from your front end.  Chances are that many of them share common elements.  For example, it is likely that each of your pages uses the same header and same footer.  We will use layouts to allow for the various pages on your site that share a similar layout.  The layout files will go in the `layouts` directory in the theme.  In most cases, your theme will only require one layout, but there is no reason why your theme could not have multiple layouts.  For reference, here is the default layout that we use in the theme:

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ wp_title('') }}</title>

    @yield('head')
    
    {{ wp_head() }}

    

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


@yield('content')


{{ wp_footer() }}
</body>
</html>
```

## Views

If you are unfamiliar with the MVC (Model View Controller) pattern, then you likely have not heard the word View before.  Views are an easy concept to grasp.  Views represent what the user of your site actually see.  For example, your theme will likely have a home page, an about page, a contact page, etc.  Each of these pages will use a unique template, and each of these unique templates is what we call a "View".  For each of your static HTML files that you have in your front end, we will turn them into a re-usable "View" that will be placed into the Views directory in the Vanilla theme.  Our goal is to convert each of the static HTML files you have into a completely dynamic View, that can then be re-used throughout the theme.  

It is important to think of every single unique page on your site.  For example, if you also have a custom 404 page, this is another View that will exist in your theme, and thus, we will create another View file for it in the theme.  Other examples of common Views in your theme:

1. Blog index page (a feed of blog posts)
2. Blog single page (a single blog post)
3. Blog category page (a feed of blog posts from a specific category)
4. Search results page
5. Product page

The most important concept to remember is that we are creating these views so that they are re-usable and completely dynamic.  For example, if you have a Product view, it may be re-used to show several different products on the site.


## Partials

In the name of DRY (Don't Repeat Yourself), we place any front end code that is used across more than 1 view into a specific partial.  For example, if both your "Home Page" view and your "Product" view has a newsletter HTML on it, we can copy the code for the newsletter, place it into a partial, and then load the partial in both of the views using:

`@include('partials/name-of-partial')`

Any time you find two views using the same block of HTML, you should partial it out into a file in the `partials` directory.  Never have the same code in two different places.

## Advanced Custom Fields (ACF) Field Groups

The Vanilla theme includes the Advanced Custom Fields plugin by default.  Advanced custom fields allow you to create fields in wp-admin that make it easy for the user to edit/add/remove content from a page or post on the site.  To give you an example of this, let's assume your home page view has a header, a slider, and a testimonial on it.  If your site was completely static, in order to edit the content on the page, the user would have to open the template file and manually update the HTML.

To make this dynamic, we will instead create a new ACF field group and assign it to the home page.  The field group will have specific fields defined that allows the user to update the content on the page.  In the case of our home page example, we would create the following fields on our field group:

1. Header (text field)
2. Slider (repeater field)
3. Testimonial (textarea field)

We would then update the home page view so that it dynamically pulls from this field group rather than simply loading the static HTML.


## Post Types (also referred to as Custom Post Types - CPT)

Post Types refer to the data of your WP theme.  By default, WordPress has the following Post Types enabled in your theme:

1. Posts - posts are where you go to publish blog posts on your WordPress site.
2. Pages - pages are where you go to publish new pages on your WordPress site.
3. Attachment - whenever you upload a new file to your WordPress media library, a new "attachment" post is created.

In many cases, your theme will not require you to create any additional post types, and the above post types will fulfill all the needs of your theme.

However, let's assume that your theme has other data types.  For example, maybe your site has client testimonials that are displayed in various parts of the site.  Or, if you are building a portfolio on your site, you will have many different portfolio items.  Finally, if you are selling something on your site, you may have a list of products.  In each of those cases, you will need to create a Custom Post Type (CPT) so that you will be able to easily store this data in your theme.  We will walk you through how to easily create these Custom Post Types later on in this tutorial.


## Taxonomy

Taxonomies can be used to sort and filter your post types.  By default, WordPress includes the following taxonomies:

1. Categories - categories, by default, only exist on the "Posts" post type.  Categories allow you to group many posts together.
2. Tags - tags, by default, also only exists on the "Posts" post type.  Tags also allow you to group many posts together.

The main difference between categories and tags is that categories are hierarchical and tags are not.  This means that categories can have parent categories.  For example, you may have a blog about travel, and you could have a parent category called "International Travel".  Then, within that "International Travel" category, you could have many children categories called "China", "Japan", etc. etc.  This gives you the ability to filter down your posts by all "International Travel" posts, and then get more granular by only viewing "International Travel" posts that also have the travel category of "China" (which would give you the posts only about China).

On the other side, Tags are not hierarchical (tags cannot have parent tags).  Perhaps on your Travel blog, you also have many posts about "Food" that span across many of your Travel posts.  You can assign a tag of "Food" to those posts, which would then allow you to filter across all of the posts about Food.

The difference between Tags and Categories (hierarchical and non-hierarchical) is not always immediately clear, and as a best practice, we almost always will use hierarchical (categories), and very rarely use Tags.

In the Post Types section, we explained how you can create "Custom Post Types".  We can also create "Custom Taxonomies" and assign them to the Post Types in the theme which us allows us to filter the posts.  For example, if we have a Products CPT, we may want to be able to filter these Products by their color.  We can create a Custom Taxonomy called "Color" and then assign it to the Products CPT.  This would allow us to then add Colors, and assign them to the products.


## Menus

Your theme likely has a navigation menu (or two menus, or many).  For example, you may have a menu in the header, and also a menu in the footer.  Menus in WordPress allow you to dynamically control which pages are outputted into the menus.  We will walk you through the process of getting a menu setup in your theme later on in this tutorial.

## Image Sizes

Your theme also probably has many images that exist in various parts of the site.  For example, if you have products on your site, each product might have an image.  You will create a ACF field group that allows the user to upload and change the image that is associated with the product.  In an ideal world, the user would upload the perfect sized image of the product so that it displays properly on the site.  But often times, a user will upload an image that is too big, or not the right size.  By defining Image Sizes in your theme, WordPress will automatically crop the image so that it is the perfect size.  Within the Vanilla theme, you can define these image sizes.

## WYSIWYG Editor

The "What You See Is What You Get" (WYSIWYG) editor is built into WordPress by default.  This allows the user to update the content section on the page or post.

An important rule of thumb here is to never place blocks of HTML directly into the WYSIWYG editor.  For example, on the home page, your HTML for the testimonial section may look like this:

```
<div class="testimonial-item">
    <h3>Testimonial</h3>
    <blockquote>
        <p>Here is my testimonial</p>
        <cite>- James Jiggins, CEO CMV</cite>
    </blockquote>

</div>
```

Often times, you will be tempted to simply copy and paste this HTML block directly into the WYSIWYG on your home page in wp-admin.  This is something we never recommend, and instead, you should create a ACF field group that allows the user to fill out the content for the Testimonial, and then you should dynamically generate the HTML in the View.

So what is the WYSIWYG editor used for?  On many views, we entirely disable the WYSIWYG editor, and instead only have ACF field groups on the page.  However, on pages where there are long blocks of long-form content (for example, a blog post) the user will be able to edit the content there, and add h1 --> h6 tags and other basic content styles to the post.

## Shortcodes

In the case where you want users to be able to add more dynamic content to a WYSIWYG, we use Shortcodes.  Shortcodes allow the user to automatically generate HTML into a WYSIWYG box.  For example, we have a testimonial shortcode that looks like this: `[testimonial text="Here is my testimonial" by="James Jiggins, CEO CMV"]`

We would then have a file in the `shortcodes` directory in the theme, and when the user places the shortcode into the WYSWIYG box, when the user views the page on the front end, the template for the shortcode would be outputted.  We will give more specific examples of Shortcodes later on in this tutorial.

## Options Panel

Within the Vanilla theme, you can create custom Options Panels that will then appear in wp-admin.  You can assign ACF field groups to these option panels.  The purpose of the Options Panels is to give the theme some Global configuration options.  For example, perhaps you want the user to be able to update the logo on the site.  You can create a Options panel called "Header Options", and then create a field group on this Options panel called "Header Logo".  The user will then be able to update the logo dynamically in wp-admin.


## Gulp

Info on Gulp here.