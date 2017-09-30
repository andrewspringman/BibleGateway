<h1> Moravian Daily Texts</h1>
<?php include ('BibleGateway.class.php');?>
<style>
.versenum {
  display: none;
}
.chapternum {
  display: none;
}
</style>
<?php
$bible = new BibleGateway('MSG');
$verses = array(
  'Psalm 112',
  'Ezekiel 1,2',
  'Hebrews 9:23–10:4',
  'Amos 3:6',
  'Romans 14:8'
);
foreach ($verses as $v) {
  echo "<hr/>";
  echo "<h3>$v</h3>";
  $bible->searchPassage($v);
  echo $bible->text;
}
