<html>
<?php
$arr = array(1=>'akansh' ,5=>'Ankita',3=>'Ankit',4=>'aaa' );

$arra = array(1=>'akansh' ,2=>'divya',6=>'Ankit',4=>'Ankita', 5 => 'test' );

$c = array();

foreach ($arr as $key => $value) {
  if (isset($arra[$key])) {
    $c[] = $arra[$key];
    echo "Value is present in the second array against key" . $key . '<br />';
  }
}
print_r($c);
?>


</html>
