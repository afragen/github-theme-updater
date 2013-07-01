=== GitHub Theme Updater ===
Contributors: afragen, scarstens
Tags: theme, update, github
Requires at least: 3.4
Tested up to: 3.5.2
Git URI: https://github.com/afragen/github-theme-updater
Stable tag: master
Version: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple plugin to enable automatic updates to your GitHub hosted themes.

== Description ==

This plugin was designed to simply update any GitHub stored WordPress theme. Your theme **must** contain a header in the style.css header denoting the theme's location on GitHub. The format is as follows.

`GitHub Theme URI: https://github.com/afragen/test-child` 

Where the above URL leads to the repository of your theme.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `github-theme-updater` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

There must be a `GitHub Theme URI` declaration in the `style.css` file and you must create a tag in GitHub for each version.

    /*
    Theme Name: Test
    Theme URI: http://drfragen.info/
    GitHub Theme URI: https://github.com/afragen/test-child
    Description: Child-Theme of TwentyTwelve.
    Author: Andy Fragen
    Template: twentytwelve
    Template Version: 1.0
    Version: 0.1
    */

The only extra character allowed in a URI is `-`. Let me know if there is a need for others.

This plugin was originally based upon <a href="https://github.com/WordPress-Phoenix/whitelabel-framework/blob/master/inc/updater-plugin.php">Whitelabel Framework's updater-plugin.php</a>, which was based upon https://github.com/UCF/Theme-Updater.

== Issues ==

Please log issues either here or preferably on the GitHub at https://github.com/afragen/github-theme-updater/issues

== Changelog ==

= 1.0 =
* initial commit to WordPress repo
* serialized WP_Theme object to search for added GitHub header, lots of help from Seth. No more `file_get_contents`


= 0.2 =
* code cleanup
* limit `file_get_contents` to 2K bytes

= 0.1 =
* Initial commit

