<?php

require_once("recommend.php");
require_once("sample_list.php");


$re = new Recommend();
$matrix=$re->getRecommendations($books, "john");
print_r($matrix);
echo count($matrix);
echo is_array($matrix);
foreach($matrix as $value => $rating)
{
    print_r($value);
    echo "<br>";
}

?>