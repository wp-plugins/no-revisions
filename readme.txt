=== No Revisions ===
Contributors: jrrl
Tags: revisions
Requires at least: 2.6
Tested up to: 2.7.1
Stable tag: trunk

This plugin disables the post revision system in WordPress 2.6+.


== Description ==

While the WordPress 2.6 upgrade has not gone smoothly for a lot of people, one new feature that has yet to bite too many people is post revisions. Whenever you save a change in a post in WordPress 2.6, it saves a copy of the old version as well as your changed version. If you a lot while writing, that can add up to a lot of extra crud in your database.

Now, these can be turned off by editing your wp-config.php file, but that's a bit gross for a system like WordPress where everything else can be done through a nice web interface. This plugin gives you that web-based solution.

Just install and activate this plugin and no more revision debris in your database. Of course, that also means no safety net if you accidentally screw up a post and then save it, but that was the case until 2.6 anyway.


== Installation ==

Unzip it in your plugin directory.

To turn off revisions, activate the plugin.  To turn them back on, deactivate the plugin.

If you have any trouble after upgrading, try deactivating it, and reactivating it again.


== License ==

I dunno.  How about creative commons attribution?  Sound ok?  Good.

