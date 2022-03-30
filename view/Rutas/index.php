<!doctype html>
<html lang="en" class="no-focus"> 
    <head>
     <?php require_once("../MainHead/MainHead.php");?>
        
    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>
    </head>
    <body>
       
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            
            <aside id="side-overlay">
                
                <div id="side-overlay-scroll">
                    
                    <div class="content-header content-header-fullrow">
                        <div class="content-header-section align-parent">
                            
                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            
                            <div class="content-header-item">
                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar32" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                            </div>
                           
                        </div>
                    </div>
                   
                    <div class="content-side">
                        
                        <div class="block pull-t pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <form action="be_pages_generic_search.html" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-secondary px-10">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
                       
                    </div>
                    
                </div>
                
            </aside>
            
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                    <?php require_once("../MainSidebar/MainSidebar.php");?>


                    <?php require_once("../MainMenu/MainMenu.php");?>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php require_once("../MainHeader/MainHeader.php");?>
            
            <main id="main-container">
                <div class="content">
                    <h2 class="content-heading">RUTAS <small></small></h2>
                    <p></p>
                </div>
                
            </main>
            

            <?php require_once("../MainFooter/MainFooter.php");?>
            
            
        </div>
        
        <?php require_once("../Mainjs/Mainjs.php");?>
    </body>
</html>