## GitHub Theme Updater

This is a simple WordPress plugin to update any themes that are kept on GitHub.

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

This plugin was originally based upon https://github.com/WordPress-Phoenix/whitelabel-framework/blob/master/inc/updater-plugin.php, which was based upon https://github.com/UCF/Theme-Updater.

### To Do

* There is no rollback feature.

I use https://github.com/codepress/github-plugin-updater to keep my non-WordPress repo, GitHub located plugins updated.

