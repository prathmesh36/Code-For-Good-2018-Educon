<?php
header('Content-Type: application/json');

require_once('assets/backend/connect.php');

$student_id = $_GET['id'];
// echo $student_id;
$sqlQuery = "SELECT year,result,income FROM application WHERE id = ".$student_id. " ORDER BY year ";

$result = mysqli_query($con,$sqlQuery);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
// print json_encode($rows);

// print_r($result);

// $data = array();
// foreach ($result as $row) {
// 	$data[] = $row;
// }

// $data = array(
//     array(
//         "playerid" => 1,
//         "score" => 10
//     ),
//     array(
//         "playerid" => 2,
//         "score" => 40
//     ),
//     array(
//         "playerid" => 3,
//         "score" => 20
//     )
// );

// $data = [  
//    {  
//       "playerid":"1",
//       "score":"10"
//    },
//    {  
//       "playerid":"2",
//       "score":"40"
//    },
//    {  
//       "playerid":"3",
//       "score":"20"
//    },
//    {  
//       "playerid":"4",
//       "score":"9"
//    },
//    {  
//       "playerid":"5",
//       "score":"20"
//    }
// ]

mysqli_close($con);

echo json_encode($rows);
?>