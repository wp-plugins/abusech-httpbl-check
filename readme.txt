=== Plugin Name ===
Contributors: admin [at] abuse {dot} ch
Tags: blacklist, rbl, dnsbl, check, stop abusers, lookup
Stable tag: 1.3

Check if a visitor is listed on httpbl.abuse.ch, see http://dnsbl.abuse.ch/faq.php#about_httpbl for more information

== Description ==

This plugin checks if a visitor is listed on httpbl.abuse.ch.
The RBL blocks access from ips which are:

- Known source of Hacking activities / Script Kiddie
- Hijacked webserver or Scanning drones
- Source of referer Spam

See http://dnsbl.abuse.ch/faq.php#about_httpbl for more information.

== Installation ==

1. Upload `check_httpbl.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

You can check the plugin by using the following link http://www.abuse.ch/httpbl/test.php

== Frequently Asked Questions ==


== Screenshots ==

1. If the ip-address of one of your visitors is blacklisted on httpbl.abuse.ch, he will receive an error message.
