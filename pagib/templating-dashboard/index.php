<!doctype html>
<html lang="en">

<head>
    <?php include "components/css.php" ?>
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        <?php include "components/header.php" ?>
        <?php include "components/sidebar.php" ?>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?php
                        
                        if(!isset($_REQUEST['menu'])){
                            include "contents/home.php";
                        }else{
                            include "contents/".$_REQUEST['menu'].".php";
                        }


                    ?>

                </div> <!-- container-fluid -->
            </div>

            <?php include "components/footer.php" ?>
        </div>
    </div>
    <?php include "components/js.php" ?>
</body>

</html>