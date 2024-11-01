=== Transfer.ro File Information ===
Contributors: Marius Puiu, Dragos Vasilescu
Tags: transfer, transfer.ro, file information, file status, transfer api, transfer.ro api
Requires at least: 2.0.2
Tested up to: 2.9.2
Stable tag: 2.9.2

This plugin retrieves uploaded's file information and status (from transfer.ro).
== Description ==

<h1>Transfer.ro File Information</h1>
This plugin retrieves uploaded's file information and status (from transfer.ro).

== Installation ==

1. Upload 'transfer_status.php' to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Why do I need this? =

You can check and display for your blog visitors the size, upload date, expiration date, number of downloads and, if archive, the files contained by the archive.
The plugin detects any link that points to 'dl.transfer.ro' and adds the information into the  'title' attribute.
The new 'title' attribute will contain the filename (e.g. archive's name), size, upload date, expiration date, number of downloads and a list of files (if archive).

= Will this plugin modify my posts or my real links? =

No. If the plugin is activated, it will generate the 'title' (of an 'dl.transfer.ro' link) attribute at 'runtime' (as in reading the post at that moment). So it will NOT modify any of your links or posts. If inactive, the links (to 'dl.transfer.ro') will be the same as they were when you wrote/updated the post.
In a nutshell, the plugin will work on the fly without any modifications anywhere. Isn't that cool? :-)

= What is transfer.ro? =

Transfer.ro is the leading professional secure file sharing tool for Romanian Internet users.
We help professionals and regular users  to securely send files up to 1 GB.

== Screenshots ==

1. This screenshot shows an example of an 'dl.transfer.ro' link's title tag. 

== Changelog ==

= 1.0 =
First Version. 

== Upgrade Notice ==

= 1.0 =
No need to upgrade at the moment.
