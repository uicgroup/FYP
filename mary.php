<style>
table, th, td {
  border: 1px solid black;
  align-content: center;
  font-size: 20px;
  width: 50%;
  margin-left: 25%;
}
tr
{
	background: 
}
</style>
<?php
include_once('simple_html_dom.php');
ini_set('memory_limit', '-1');
      // Create DOM from URL or file
libxml_use_internal_errors(true);
$result= file_get_contents('http://www.cjmwaverley.org/Fee-Structure.aspx');


$dom = new DomDocument();
$dom->loadHTML($result);

$data;
foreach($dom->getElementsByTagName('table') as $element) {
  $data = $element->nodeValue;

} 

$str = $data;
$arr = explode("\n", $str);

echo "<table class=\"table\">";
	echo "<tr>";
    echo "<th>MARY SCHOOL FEE STRUCTURE</th>";
	echo "</tr>";

for ($x = 0; $x <= sizeof($arr)-1; $x++) {
	echo "<tr>";
    echo "<td>".$arr[$x]."</td>";
	echo "</tr>";

} 
echo "</table>";
?>