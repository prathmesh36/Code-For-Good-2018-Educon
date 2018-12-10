<?php
  if(isset($_GET["search"])){
    $arr =  json_decode(file_get_contents("http://www.truemd.in/api/v2//medicines.json?key=7f556015a882f1e1b70779e35723b182&search=".$_GET["search"]));

    foreach($arr as $arrlist)
     {
     	if(is_array($arrlist))
     	foreach($arrlist as $arrmed)
     	{
     		$name = $arrmed->name;
     		$manufacturer = $arrmed->manufacturer;
     		$form = $arrmed->pForm;
     		$size = $arrmed->packSize;
     		$mrp = $arrmed->mrp;
     		echo $name;
     		echo "1234";
     		echo $manufacturer;
        echo "1234";
        echo $form;
        echo "1234";
        echo $size;
        echo "1234";
        echo $mrp;
        echo "1234";
     		echo "<br><br>";
     	}
     }
  }



 ?>
