=== Smartling Connector ===
Contributors: smartling
Tags: translation, localization, localisation, translate, multilingual, smartling, internationalization, internationalisation, automation, international
Requires at least: 4.3
Tested up to: 4.3
Stable tag: 1.0.25
License: GPLv2 or later

Translate content in WordPress quickly and easily with Smartling’s Global Fluency Platform. 

== Description ==

The Smartling Connector extends the WordPress interface for seamless management of the translation process, all while leveraging the tools contained in Smartling’s Global Fluency Platform. Easily installed with minimal developer support, the combination of WordPress and Smartling provides users with a powerful technology solution to manage the translation and localization process with full visibility and control across the entire organization. 

Integration Features

* Automatic change detection for content updates
* Robust custom workflow engine configurable per language
* Automatic download of completed translations to WordPress
* Translation Memory integration
* No tie-ins to translation agencies or vendors
* Reporting for translation velocity, efficiency 

== Installation ==

= Minimum Requirements =
* WordPress 4.3 or higher
* Multisite mode enabled
* Multilingual Press free plugin 
* PHP Version 5.4 or higher
* PHP extensions `mb_string` and `curl`

1. Configure [Multilingual Press](https://wordpress.org/plugins/multilingual-press) using instructions found [here](http://support.smartling.com/hc/en-us/articles/205418457).
1. Upload the unzipped Smartling Connector plugin to the `/wp-content/plugins/` directory.
1. Go to the Plugins screen and **Activate** the Smartling Connector plugin.
1. Navigate to the Smartling - Settings page (/network/admin.php?page=smartling-settings) and click **Add Profile**.
1. Set the Project ID and API Key credentials found in the Smartling Dashboard for the project created for WordPress.
1. Select the Default Locale and the target locales for the translated sites you are creating.

== Frequently Asked Questions ==

Additional information on the Smartling Connector for WordPress can be found [here](http://support.smartling.com/hc/en-us/sections/200967468-Wordpress-Connector).

== Screenshots ==

1. Submit posts for translation using the Smartling Post Widget directly from the Edit page. View translation status for languages that have already been requested. 
2. The Bulk Submit page allows submission of Post, Page, Category, Tag, Navigation Menu and Theme Widget text for all configured locales from a single interface.
3. Track translation status within WordPress from the Submissions Board. View overall progress of submitted translation requests as well as resend updated content.  

== Changelog ==

= 1.0.25 =
* Added ability to translate standard WordPress widgets from the Bulk Submit Page.

= 1.0.22 =
* Copy non-translatable custom fields from original to translated posts.

= 1.0.21 =
* Database cron marker allows configuration of cron for high-load websites.
* Cron tasks triggered every 5 minutes instead of every hour. 

= 1.0.19 =
* Pages can be locked to prevent changes to translated post/page from being overwritten.

= 1.0.18 =
* Smartling self-diagnostics are displayed on admin panel.
* Smartling database tables are rebuilt if required on plugin activation.

= 1.0.16 =
* Hide content types that are supported by the connector but not present in WordPress.

= 1.0.15 =
* Basic support for custom content types.

= 1.0.14 =
* Compatibility with WordPress 4.2.x.
* Improvements to Locale display on Submissions Board and Bulk Submit screens.

= 1.0.12 =
* Support for multiple translation profiles.



