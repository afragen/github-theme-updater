=== GitHub Theme Updater ===
Contributors: afragen
Requires at least: 3.4
Tested up to: 3.5.2
Git URI: https://github.com/afragen/github-theme-updater
Version: 0.1

License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple plugin to automatically update any theme stored on GitHub.

== Description ==

This plugin was designed to simply update any GitHub stored WordPress theme. Your theme **must** contain a header in the style.css header denoting the theme's location on GitHub. The format is as follows.

GitHub Theme URI: https://github.com/afragen/github-theme-updater 

Where the above URL leads to the repository of your theme.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `github-theme-updater` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==


== Changelog ==

= 0.2 =
* code cleanup
* limit `file_get_contents` to 2K bytes

= 0.1 =
* Initial commit

