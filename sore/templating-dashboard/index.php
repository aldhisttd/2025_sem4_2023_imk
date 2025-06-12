<!doctype html>
<html lang="en">
    <head>
        <?php include('components/head.php') ?>
    </head>

    <body data-sidebar="dark">
        <div id="layout-wrapper">
            <?php include('components/header.php') ?>
            <?php include('components/menu.php') ?>

            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <?php 
                            if(!isset($_REQUEST['page'])){
                                $_REQUEST['page'] = 'home';
                            }

                            include("pages/".$_REQUEST['page'].".php");
                        ?>

                    </div> 
                </div>
                <?php include('components/footer.php') ?>
            </div>

        </div>
        <?php include('components/script.php') ?>
    </body>
</html>
