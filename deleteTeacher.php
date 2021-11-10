<?php 
    require_once "../database/config.php";

?>

<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM teacher WHERE ID = $id";
        $query = mysqli_query($link, $sql);
        if ($query) {
            header("location: ../frontend/teacher.php");
        }

    }

?>