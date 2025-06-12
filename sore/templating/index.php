<?php include("component/menu.php") ?>
<hr>
<div>
    <?php 
        if(!isset($_REQUEST['page'])){
            header('location:index.php?page=home');
            exit();
        }else{
            include($_REQUEST['page'].".php");
        }
    ?>
</div>
<hr>
<?php include("component/footer.php") ?>
