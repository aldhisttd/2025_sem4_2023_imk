<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li class="
                    <?php 
                        if(
                            $_REQUEST['menu']=='home' ||
                            $_REQUEST['menu']=='update'
                        ){
                            echo "mm-active";
                        }
                    ?>
                ">
                    <a href="javascript: void(0);" class="has-arrow waves-effect 
                        <?php 
                            if(
                                $_REQUEST['menu']=='home' ||
                                $_REQUEST['menu']=='update'
                            ){
                                echo "mm-active";
                            }
                        ?>
                    " aria-expanded="
                        <?php 
                            if(
                                $_REQUEST['menu']=='home' ||
                                $_REQUEST['menu']=='update'
                            ){
                                echo "true";
                            }
                        ?>
                    ">
                        <i class="ri-layout-3-line"></i>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sub-menu 
                    <?php 
                        if(
                            $_REQUEST['menu']=='home' ||
                            $_REQUEST['menu']=='update'
                        ){
                            echo "mm-collapse mm-show";
                        }
                    ?>
                    " aria-expanded="false">
                        <li class="<?= ($_REQUEST['menu']=='home')?'mm-active':null ?>">
                            <a href="index.php?menu=home" class="<?= ($_REQUEST['menu']=='home')?'active':null ?>">Home</a>
                        </li>
                        <li class="<?= ($_REQUEST['menu']=='update')?'mm-active':null ?>">
                            <a href="index.php?menu=update" class="<?= ($_REQUEST['menu']=='update')?'active':null ?>">Update</a>
                        </li>
                    </ul>
                </li>

                <li class="
                    <?php 
                        if(
                            $_REQUEST['menu']=='allpost' ||
                            $_REQUEST['menu']=='addpost' ||
                            $_REQUEST['menu']=='categories' ||
                            $_REQUEST['menu']=='tags'
                        ){
                            echo "mm-active";
                        }
                    ?>
                ">
                    <a href="javascript: void(0);" class="has-arrow waves-effect 
                        <?php 
                            if(
                                $_REQUEST['menu']=='allpost' ||
                                $_REQUEST['menu']=='addpost' ||
                                $_REQUEST['menu']=='categories' ||
                                $_REQUEST['menu']=='tags'
                            ){
                                echo "mm-active";
                            }
                        ?>
                    " aria-expanded="
                        <?php 
                            if(
                                $_REQUEST['menu']=='allpost' ||
                                $_REQUEST['menu']=='addpost' ||
                                $_REQUEST['menu']=='categories' ||
                                $_REQUEST['menu']=='tags'
                            ){
                                echo "true";
                            }
                        ?>
                    ">
                        <i class="ri-layout-3-line"></i>
                        <span>Posts</span>
                    </a>
                    <ul class="sub-menu 
                    <?php 
                        if(
                            $_REQUEST['menu']=='allpost' ||
                            $_REQUEST['menu']=='addpost' ||
                            $_REQUEST['menu']=='categories' ||
                            $_REQUEST['menu']=='tags'
                        ){
                            echo "mm-collapse mm-show";
                        }
                    ?>
                    " aria-expanded="false">
                        <li class="<?= ($_REQUEST['menu']=='allpost')?'mm-active':null ?>">
                            <a href="index.php?menu=allpost" class="<?= ($_REQUEST['menu']=='allpost')?'active':null ?>">All Post</a>
                        </li>
                        <li class="<?= ($_REQUEST['menu']=='addpost')?'mm-active':null ?>">
                            <a href="index.php?menu=addpost" class="<?= ($_REQUEST['menu']=='addpost')?'active':null ?>">Add Post</a>
                        </li>
                        <li class="<?= ($_REQUEST['menu']=='categories')?'mm-active':null ?>">
                            <a href="index.php?menu=categories" class="<?= ($_REQUEST['menu']=='categories')?'active':null ?>">Categories</a>
                        </li>
                        <li class="<?= ($_REQUEST['menu']=='tags')?'mm-active':null ?>">
                            <a href="index.php?menu=tags" class="<?= ($_REQUEST['menu']=='tags')?'active':null ?>">Tags</a>
                        </li>
                    </ul>
                </li>

                <!-- <li class="mm-active">
                    <a href="javascript: void(0);" class="has-arrow waves-effect mm-active" aria-expanded="true">
                        <i class="ri-mail-send-line"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu mm-collapse mm-show" aria-expanded="false" style="">
                        <li class="mm-active"><a href="email-inbox.html" class="active">Inbox</a></li>
                        <li><a href="email-read.html">Read Email</a></li>
                    </ul>
                </li> -->

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>—