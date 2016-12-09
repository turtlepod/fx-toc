=== f(x) TOC ===
Contributors: turtlepod
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TT23LVNKA3AU2
Tags: table of contents, toc, shortcode, toc shortcode, heading, wikipedia
Requires at least: 4.0
Tested up to: 4.7
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple Table Of Contents Plugin. Just add [toc] shortcode in content to display.

== Description ==

**[f(x) TOC](http://genbumedia.com/plugins/fx-toc/)** Simple Table Of Contents Plugin. Just add [toc] shortcode in content to display. This plugin will parse and grab all heading (h1 -h6) in your content and display it as structured table of contents (just like WikiPedia.org table of contents).

**Features:**

1. Super simple and easy to use.
1. Auto create Table of contents by listing all your headings in your content.
1. The GPL v2.0 or later license. :) Use it to make something cool.
1. Support available at [Genbu Media](http://genbumedia.com/contact/?about=f(x)+TOC).

**Shortcode Options:**

You can use several options in [toc] shortcode:

1. title: to change the title of table of contents, as default is `Table of contents`.
1. title_tag: element wrapper for the title, the default is `h2`.
1. list: you can use `ul` for unordered list (default), or `ol` for ordered list.
1. depth: list depth (numeric). the default is `6`.

Advance usage example using all the options:

[toc title="This page content:" title_tag="strong" list="ol" depth="1"]

== Installation ==

1. Navigate to "Plugins > Add New" Page from your Admin.
2. To install directly from WordPress.org repository, search the plugin name in the search box and click "Install Now" button to install the plugin.
3. To install from plugin .zip file, click "Upload Plugin" button in "Plugins > Add New" Screen. Browse the plugin .zip file, and click "Install Now" button.
4. Activate the plugin.

== Frequently Asked Questions ==

= Can I add this in widget ? =

No, you can only add this shortcode in content.

= Can I dislay it in archive pages? =

Yes, if your theme display full content, table of contents will be displayed.

= How to style this ? =

The Table of contents output is wrapped in `fx-toc` class. You can style it using CSS.

== Screenshots ==

Check out the demo page: [The Godfather (1972)](http://demo.genbu.me/penny/2016/02/20/the-godfather-1972/)

== Changelog ==

= 1.1.0 - 04 May 2016 =
* Display TOC on archive pages too.
* Strip tags for each list item to avoid problem in the future.
* Add plugin action link for support.
* new filter "fx_toc_output".

= 1.0.0 - 11 Jan 2016 =
* Init

== Upgrade Notice ==

= 1.1.0 =
TOC now works for full content in archive too.

= 1.0.0 =
initial relase.

== Other Notes ==

Notes for developer: 

= Github =

Development of this plugin is hosted at [GitHub](https://github.com/turtlepod/fx-toc). Pull request and bug reports are welcome.

= Hooks =

List of hooks available in this plugin:

**filter:** `fx_toc_default_args` (array)

The default option for the shortcode.

**filter:** `fx_toc_output` (string)

HTML output of the shortcode.