<?php
/**
* Plugin Name: Simple Word Count and Reading time
* Plugin URI: http://hapiucrobert.ro
* Description: Display word count and reading time on your article with a nice and clean progress bar. 
* Version: 1.0
* Author: Hapiuc Robert
* Author URI: http://hapiucrobert.ro
* License: GPLv2 or later
*/

require plugin_dir_path( __FILE__ ) . 'class.WordCount.php';

$wordCount = new WordCount();
