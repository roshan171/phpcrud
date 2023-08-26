<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `interviewcrud` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "<script type=\"text/javascript\">
        alert(\"Data Deleted Successfully\");
        window.location = \"view.php\"
        </script>";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>