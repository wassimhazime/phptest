
<?php require  'MethodeGET.php' ?> 
<?php include 'conn.php' ?> 
<?php

// 3- write or display data

if ($param1 == "") {
    //2- read from database
    $query = "select * from produit";
} else {
    $query = "select * from produit where id=" . $param1;
}

$result = mysqli_query($connect, $query);

if (!$result) {
    die("Error in query");
}


while ($row = mysqli_fetch_assoc($result)) {
    
    $arr[] = $row;

//    echo '<li>|    id:' . $row['id'] .
//    ',|     nom:' . $row['nom']
//    . ',|    marque:' . $row['marque']
//    . "</li>";
}

//echo "'sql':";
echo json_encode($arr);



?><?php
//echo "{'info':{'name':'hussein','age':27 }}";


?>
<?php mysqli_free_result($result); ?>