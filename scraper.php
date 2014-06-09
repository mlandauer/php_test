<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
?>
