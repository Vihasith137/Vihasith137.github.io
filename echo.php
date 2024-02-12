<?php 
$input = $_REQUEST["data"];
echo "requested input is <strong>" . $inputData . "</strong>.<br>";
if(empty($_REQUEST["data"])){
exit("enter the input field 'data'");
}
$input=htmlentities($_REQUEST["data"]);
echo ("The input from the request is <strong>" .$input. "</strong>.<br>");
echo $input;
  ?>
