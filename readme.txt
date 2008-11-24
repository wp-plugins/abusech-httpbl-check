=== abuse.ch httpBL check ===
Contributors: admin [at] abuse {dot} ch
Tags: blacklist, rbl, dnsbl, check, stop abusers, lookup, admin
Stable tag: 1.4
Requires at least: 2.0.2
Tested up to: 2.5.1

Check if a visitor is listed on httpBL.abuse.ch, see http://dnsbl.abuse.ch/faq.php#about_httpbl for more information.

== Description ==

This plugin checks if a visitor is listed on httpBL.abuse.ch.
The RBL blocks access from ips which are:

- Known source of Hacking activities / Script Kiddies
- Hijacked webserver or scanning drones
- Source of referer Spam

You can finde a statistical breakdown for httpBL.abuse.ch <a href="http://dnsbl.abuse.ch/httpbl/stats.php" target="_blank" title="httpBL.abuse.ch statistic">here</a>.
For more information just take a look at the <a href="http://dnsbl.abuse.ch/faq.php#about_httpbl" target="_blank" title="httpBL.abuse.ch FAQ">FAQ</a>.

== Changelog ==

= 1.4 =
- Fixed an error in the logging function ($response instead of $responses)
- gethostbyaddr will now only be executed when logging is enabled

= 1.3 =
- Corrected some typing errors in check_httpbl.php
- Changed the message which a visitor receive, when he is listed at httpBL.abuse.ch. Now the message contains a link to the lookup form at http://dnsbl.abuse.ch/check.php where the visitor will find reason and time of the listing.

== Installation ==

1. Upload `check_httpbl.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

You can check whether the plugin works by using the following link: <a href="http://www.abuse.ch/httpbl/test.php" target="_blank" title"httpBL.abuse.ch configuration test">configuration test</a>.

Normaly, the Plug-In creates a logfile called `httpbl.log` in your root directory.
If you want to disable the logging option just edit the file `check_httpbl.php` and change the option `$logging` from `1` to `0`:

- Logging enabled: `$logging = "1";`
- Logging disabled: `$logging = "0";`

== Frequently Asked Questions ==

= Does this plugin protect my blog against comment Spam? =

No, httpBL.abuse.ch protects you only from ips which are:

- Known source of Hacking activities / Script Kiddie
- Hijacked webserver or Scanning drones
- Source of referer Spam

== Screenshots ==

1. If the ip-address of one of your visitors is blacklisted on httpBL.abuse.ch, he will receive an error message.
