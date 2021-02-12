<?php 
    $pathToRootFolder = "../../";
    $page_title = "CG Template PHP/SASS - home"; // used in head.php

    // FILE NAME:
        // method 1 : name it manually.
            // $page_name = "page_home"; // please name same as the file but without extension
        
        // method 2 : automatically calculate page_name :
            $page_path_array = explode("\\",__FILE__); // split path of actual file in an array
            $page_name = substr(end($page_path_array), 0,-4); // extract actual file name without extension 

?>

<!DOCTYPE html>
<html lang="fr">

    <?php include($pathToRootFolder."views/common/head.php");?>

<body>
    <!-- =================================================== -->
    <!-- ================ HTML START ================ -->

    <!-- ======== NAVBAR ========= -->
    
    <!-- possibility 1: keep the navbar here -->
    <!-- possibility 2: move this line into header.php -->
    <?php include($pathToRootFolder."views/common/navbar.php"); ?>


    <!-- ======== MAIN CONTENT ========= -->

        <!-- main -->
        <?php include($pathToRootFolder."views/pages/".$page_name."/page-content.php"); ?>

        <!-- aside -->

    <!-- FOOTER -->
    <?php include($pathToRootFolder."views/common/footer.php");?>
    
    <!-- ================ HTML END ================ -->
    <!-- =================================================== -->

    <?php include($pathToRootFolder."views/common/load_js_scripts.php");?>
</body>

</html>