<?php
include 'data.php';
if($income<4000)
{
echo $iscore=4;
}
else if($income>4000 || $income<8000)
{
echo $iscore=3;
}
else if($income>8000 || $income<12000)
{
echo $iscore=2;
}
else if($income>12000 || $income<15000)
{
$iscore=1;
}
else if($income>15000)
{
echo "Rejected";
}
else
{

}

?>