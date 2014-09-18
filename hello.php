<?php echo 'Hello World' ?>

<?php
include_once('./simple_html_dom.php');
$file = file_get_html('http://software-carpentry.org/lessons.html');

foreach($file->find('li') as $element)
{
  echo $element . '<br>';
}
echo $file; 


//$dom = new DomDocument();
//$dom->loadHTML($file);
//$dom->getElementsByTagName('li');
//echo $dom;
?>
