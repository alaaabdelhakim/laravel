            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="/front/img/HSCO_logo.jpg" alt="" height="22">
                            </span>
                            <i>
                                <img src="/front/img/HSCO_logo.jpg" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="/manage/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a id="name_3" href="{{ route('profile.index') }}">{{ Auth::user()->name }}</a> </h5>
                        <p class="text-muted" id="jop_3">{{ Auth::user()->jop }}</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                         <!--   <li>
                                <a href="{{ route('admin.dashboard') }}">
                                    <i class="fi-air-play"></i><span>Main</span>
                                </a>
                            </li> -->


                            <li>
                                <a href="{{ route('about.index') }}">
                                    <i class="fa fa-cog" aria-hidden="true"></i><span>About Us</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('products.index') }}">
                                    <i class="fi-air-play"></i><span>Products</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('slider.index') }}">
                                    <i class="fi-air-play"></i><span>Slider</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('contact.index') }}">
                                    <i class="fi-air-play"></i><span>Contact Us</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('social.index') }}">
                                    <i class="fi-air-play"></i><span>Social</span>
                                </a>
                            </li>



                         <!---   <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> exmple </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">ex1</a></li>
                                </ul>
                            </li> -->




                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
