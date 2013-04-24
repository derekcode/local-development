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
