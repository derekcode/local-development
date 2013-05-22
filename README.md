Local Development Project Filter
================================

History
-------

I often find myself working on dozens of web applications, using different operating systems and platforms in different coding languages at a time.  Over time, I found that a simple landing page that allowed me to quickly filter and find the project or utility helped me immensely.

Overview
--------

The Local Development Project Filter reads your development webroot and generates an easily searchable table of projects.

Requirements
-----

Apache
PHP

Todo
----

Create a simple function to read the current URL so we don't have to rely on editing the config file out of the box.
=======
Localhost Development Site
==========================

The Localhost Development Site is a simple application I use to help corral my web apps. It reads your development webroot and generates a table of searchable, filterable table of your projects. The app uses Twitter Bootstrap UI, jQuery, and DataTables.

Prerequisites
-------------
You need to have a local webserver like MAMP, WAMP, LAMP, etc. running PHP.

Installation
------------
Simply drop this project in your local webroot, and drop your projects inside it.

Structure
---------
The file structure is small and simple:
- _hidden (folder: anything in this folder will not be displayed in the browser)
    - assets (folder: holds css, js, images, etc.)
    - tools (folder: phpinfo, phpliteadmin, and sqlbuddy are located here)
- example-hello-world-app (folder: sample project you can delete)
- index.php (file: entry point)
