<?php
define('MAGPIE_DIR', '../includes/rss/');
require_once(MAGPIE_DIR.'rss_fetch.inc');
//displays posts from url and limits the number
$num_items = 3;
$rss = fetch_rss( 'http://feeds.feedburner.com/PimaCountyPublicLibraryRavenousReaders' );
$items = array_slice($rss->items, 0, $num_items);
//display link's recent blog entries:

foreach ($items as $item) {
   $href = $item['link'];
   $title = $item['title'];
   $created = $item['created'];
//displays title of post   
   echo "<h3><a href=$href>$title</a></h3> $created\n<br><br>";
//displays body of post   
   echo $item['description'] . "<br><br>\n";
}
?>