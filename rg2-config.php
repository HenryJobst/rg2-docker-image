<?php
/**
 * The configuration file for RG2.
 *
 * This file should be modified to set up the details for a specific Routegadget installation.
 * Then save as rg2-config.php
 *
 */
  // Location of directory where Routegadget is installed.
  // This should have /kartat and /rg2 sub-directories.
  define('RG_BASE_DIRECTORY', 'http://localhost/');
  
  // override to allow js and css to be loaded from a separate location if needed
  // probably only relevant for routegadget.co.uk to avoid 100 copies of source files
  //define('OVERRIDE_SOURCE_DIRECTORY', 'https://www.routegadget.co.uk');

  // allow relocating kartat directory: only intended for development environment using localhost
  // define('OVERRIDE_KARTAT_DIRECTORY', 'kartat/');
  
  // location of Splitsbrowser files if required: see Wiki for details of how to install Splitsbrowser
  define('SPLITSBROWSER_DIRECTORY', 'http://localhost/splitsbrowser');
  
  // default language if not English: this is overridden if the query includes a language (e.g. ?lang=fi)
  // requires a dictionary file xx.js in the lang directory
  // define('START_LANGUAGE', 'no');

  // Set encoding for input data read from text files: default UTF-8
  // Only needed for RG1 installations that used a different encoding when set up
  // define('RG_INPUT_ENCODING', 'UTF-8');

  // User interface colour theme: see gallery at http://jqueryui.com/themeroller/
  define('UI_THEME', 'base');

  // set these to an RGB colour definition to override default configuration of white text on blue background for the header
  // if you change them make sure the text shows up on the background
  define('HEADER_COLOUR', '#002bd9');
  define('HEADER_TEXT_COLOUR', '#ffffff');

  // text displayed at bottom of info dialog. Use '' to leave blank.
  // OS licence text below is neeeded for installations on routegadget.co.uk site.
  define('ADDITIONAL_INFO_TEXT', 'Maps published on this web site that contain OS data by permission of Ordnance Survey® Licence Number 100046745.');

  // proj4 co-ordinate reference system for new maps
  // see http://spatialreference.org/ref/epsg/ for master list
  // see http://spatialreference.org/ref/epsg/27700/ for example of UK National Grid
  // select "proj4" in the list see http://spatialreference.org/ref/epsg/27700/proj4/ for example parameter string
  //
  // Note: EPSG:27700 is built in to RG2 as default so you do NOT need to declare it here: this is just an example
  // EPSG:900913 (Google) is also built in
  // Uncomment the following lines and edit for the required co-ordinate system(s).
  // Use | to separate different systems if you need to add more than one.
  //
  //define('EPSG_CODE', "EPSG:32722");
  //define('EPSG_PARAMS', "+proj=utm +zone=22 +south +ellps=WGS84 +datum=WGS84 +units=m +no_defs");
  //
  // or 
  //define('EPSG_CODE', "EPSG:12345|EPSG:67890");
  //define('EPSG_PARAMS', "+proj=x +ellps=WGS84 +datum=WGS84 +units=m +no_defs|+proj=y +ellps=WGS84 +datum=WGS84 +units=m +no_defs");
