<?php

/**
 * Root Directory Path
 *
 * $root_dir is the absolute path name to the root of your application
 * @example /var/www or c:\wamp\www
 */
$root_dir   = realpath('.');


/**
 * Base URL
 *
 * base URL for the application
 * @example http://localhost:8888/
 */
$base_url = 'http://localhost:8888/localhost-development/';


/**
 * Asset Directory
 *
 * name of the directory, or path where you keep your javascripts, css, etc.
 * note: append a slash '/' at the end of your $asset_directory
 */
$asset_directory = '_hidden/assets/';


/**
 * Asset URL
 *
 * base URL for HTML assets
 * this directory is appended to the $base_url
 *
 */
$asset_url = $base_url.$asset_directory;


/**
 * Tools Directory
 *
 * name of the directory, or path where you keep tools like phpadmin or sqladmin
 * note: append a slash '/' at the end of your $asset_directory
 */
$tools_path = $base_url.'_hidden/tools/';


/**
 * Tools URL
 *
 * base URL for your app tools
 * this directory is appended to the $base_url
 */
$tools_path = $base_url.'_hidden/tools/';


// when parsing the project directory, what should we ignore and not list?
$exclusions = array(
    '.',
    '..',
    '.DS_Store',
    'README.md',
    '.git',
    '.hg',
    '_hidden'
);


/**
 * HTML Variables
 *
 * variables used in the index file
 */
// title of your app
$app_title = 'Localhost Development Environment';

// h1#page_header_callout
$page_header = 'Projects';
$page_header_small = 'your list of apps';


/**
 * Build the application table for index.php
 */
$applications_tables = build_table($root_dir , $exclusions, $base_url);


/**
 * Utility to build an HTML table of projects
 *
 * @access
 * @param string $root_dir
 * @param array $exclusions are the files or folder you don't want displayed
 * @param string $base_url used for building links to your projects
 *
 * @return string
 */
function build_table ($root_dir = null, $exclusions = null, $base_url = '')
{
    $projects = 0;

    if($root_dir)
    {
        $output  = '<table class="table table-bordered" id="projects-table">';
        $output .= '<thead>';
        $output .= '<tr>';
        $output .= '<th class="span9">Project</th>';
        $output .= '<th class="span3">Actions</th>';
        $output .= '</tr>';
        $output .= '</thead>';
        $output .= '<tbody>';

        $handle = opendir($root_dir);

        while($list_contents = readdir($handle))
        {
            if ((is_dir($root_dir."/".$list_contents)) AND (!(in_array($list_contents, $exclusions))))
            {
                $open_link = '<a href="'.$base_url.$list_contents.'" target="_blank" class="btn"><i class="icon-external-link"></i> Open</a>';

                $replace = array('-','_','.');
                $name = str_replace($replace, ' ', $list_contents);
                $name = ucwords($name);

                $output .= '<tr>';
                $output .= '<td>'.$name.'</td>';
                $output .= '<td>'.$open_link.'</td>';
                $output .= '</tr>';
                $projects++;
            }
        }

        closedir($handle);
        asort($output);
        $output .= '</tbody>';
        $output .= '</table>';
    }

    // if no projects are found in the $root_dir, let them know
    if($projects == 0)
    {
        $output = '<p class="alert">You have no applications available.  To add an application, drop it into <span class="label">'.$root_dir.'</span>.</p>';
    }

    return $output;
}

