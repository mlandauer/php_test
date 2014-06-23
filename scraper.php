<?
require 'vendor/openaustralia/scraperwiki/scraperwiki.php';
require 'vendor/openaustralia/scraperwiki/simple_html_dom.php';

scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
?>
