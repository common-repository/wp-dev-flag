# WP Dev Flag
Contributors: chrisjallen
Donate link: https://paypal.me/chrisjimallen
Tags: banner, badge, flag, banner, development, production, dev, localhost
Requires at least: 3.0.1
Requires PHP: 5.6
Tested up to: 6.4
Stable tag: 1.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Shows a floating `badge` on the front end, to visually distinguish your development site from production.

## Description

This plugin makes it easy to distinguish between your local development site, and your live site.
I created this because I often use a local duplicate of my live site, for development, with the same DB, and the same URL.

I use a hosts switcher for example [Gasmask](https://github.com/2ndalpha/gasmask) to switch between Local & Live versions of the same website, and needed a quick & easy way of identifying them. This plugin acheives that in the simplest way possible.

There are settings for colour, positioning and the text displayed on the badge.

## Installation

#### From your WordPress dashboard

1. Visit 'Plugins > Add New'
2. Search for 'WP Dev Flag'
3. Activate 'WP Dev Flag' from your Plugins page.
4. Visit 'WP Dev Flag Options' in the 'Plugins' submenu to access the settings.

#### From WordPress.org

1. Download 'WP Dev Flag'.
2. Upload the 'wp-dev-flag' directory to your '/wp-content/plugins/' directory, using your favorite method (ftp, sftp, scp, etc...)
3. Activate 'WP Dev Flag' from your Plugins page.
4. Visit 'WP Dev Flag Options' in the 'Plugins' submenu to access the settings.

## Frequently Asked Questions

**_Can I create my own CSS for the badge?_**

Currently, you can customise the colour, text and position of the badge. The ability to add a custom class is coming in the next release.

I will also explore additonal options such as custom fonts & href functionality.

**_Will the badge display on my live site if I duplicate the entire database as is?_**

No, it detects the current server environment and if it doesn't match the environment that was set originally, the plugin will not display the badge. You can simply click update to set the new environment if required.

**_Can I add a link to the badge?_**

Yes, as of Version 1.3.0 you can add your own link and toggle it to open in a new tab.

## Screenshots

1. This is what the default badge looks like.
2. This is the Trigger Options tab.
3. This is the Display Options tab.
4. This is the Link Options tab.


## Changelog

#### v1.3.1 - 23 May 21
- Bug fix: Add default option values to fix possible PHP notices.

#### v1.3.0 - 02 Jan 21
- Enhancement: Added a link options settings tab. This allows you to add a link and toggle it to open in a new tab.

#### v1.2.0 - 25 Jun 19
- Enhancement: Added a setting to toggle the badge on the front end. You now have control over the display of the badge on both front end and dashboard, independently.

#### v1.1.0 - 02 Jun 19
- Enhancement: Added the ability to show a badge in the admin dashboard. This will appear in the admin bar, to avoid obscuring any menu options.

#### v1.0.0
* First Version.

## Upgrade Notice

#### v1.0.0
This is the first version.
