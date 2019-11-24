<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>TP</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Third</b>Pole</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('public/images/5.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">Third Pole</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('public/images/5.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                                    
                                    <small></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <div class="pull-left">
                                <a href="#" class="btn btn-info btn-flat">Profile</a>
                            </div> --}}
                            <div class="pull-right">
                            <a href="{{route('logout')}}" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class="active"><a href="{{url('/add-new-admin')}}"><i class="fa fa-circle-o"></i>Add New Admin</a></li> --}}
                    <li><a href="{{url('/view-all-admin')}}"><i class="fa fa-circle-o"></i>View All Admin</a></li>
                </ul>
            </li>

            
            
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i> <span>About</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/abouts-add')}}"><i class="fa fa-circle-o"></i>Add About</a></li>
                    <li><a href="{{url('/abouts-view')}}"><i class="fa fa-circle-o"></i>View About </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i> <span>Carousel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/carousel-add')}}"><i class="fa fa-circle-o"></i>Add Carousel</a></li>
                    <li><a href="{{url('/carousel-view')}}"><i class="fa fa-circle-o"></i>View Carousel </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-industry"></i> <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/category-add')}}"><i class="fa fa-circle-o"></i>Add New Category</a></li>
                    <li><a href="{{url('/category-view')}}"><i class="fa fa-circle-o"></i>View All Category </a></li>
                </ul>
            </li>
            
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-product-hunt"></i> <span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/product-add')}}"><i class="fa fa-circle-o"></i>Add New Product</a></li>
                    <li><a href="{{url('/product-view')}}"><i class="fa fa-circle-o"></i>View All Product </a></li>
                </ul>
            </li>

            
            
            <li class="treeview">
                <a href="#">
                        <i class="fa fa ship"></i> <span>Delivary and Shipment</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/delivary-add')}}"><i class="fa fa-circle-o"></i>Add New Delivary Method</a></li>
                    <li><a href="{{url('/delivary-view')}}"><i class="fa fa-circle-o"></i>View All Delivary Method</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Payment Method</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/payment-add')}}"><i class="fa fa-circle-o"></i>Add New Paymet Method</a></li>
                    <li><a href="{{url('/payment-view')}}"><i class="fa fa-circle-o"></i>View All Payment Method</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-question-circle"></i> <span>FAQ</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/faq-add')}}"><i class="fa fa-circle-o"></i>Add FAQ</a></li>
                    <li><a href="{{url('/faq-view')}}"><i class="fa fa-circle-o"></i>View All FAQ</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Message</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/inbox')}}"><i class="fa fa-circle-o"></i>View All Inbox</a></li>
                    <li><a href="{{url('/reply')}}"><i class="fa fa-circle-o"></i>View All Reply</a></li>
                </ul>
            </li>

            <li class="treeview">
                    <a href="#">
                        <i class="fa fa-circle-o"></i> <span>SEO</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{url('/add-seo')}}"><i class="fa fa-circle-o"></i>Add Seo</a></li>
                        <li><a href="{{url('/view-seo')}}"><i class="fa fa-circle-o"></i>View Seo</a></li>
                    </ul>
                </li>



                 

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>