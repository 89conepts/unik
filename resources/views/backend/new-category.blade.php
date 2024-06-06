@include('layout')


                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
            <div class="header-dashboard">
                <div class="wrap">
                    <div class="header-left">
                        <a href="index.html">
                            <img class="" id="logo_header_mobile" alt="" src="images/logo/logo.png"
                                data-light="images/logo/logo.png" data-dark="images/logo/logo-dark.png" data-width="154px"
                                data-height="52px" data-retina="images/logo/logo@2x.png">
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                        <form class="form-search flex-grow">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="show-search" name="name" tabindex="2"
                                    value="" aria-required="true" required="">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                            <div class="box-content-search" id="box-content-search">
                                <ul class="mb-24">
                                    <li class="mb-14">
                                        <div class="body-title">Top selling product</div>
                                    </li>
                                    <li class="mb-14">
                                        <div class="divider"></div>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="product-item gap14 mb-10">
                                                <div class="image no-bg">
                                                    <img src="images/products/17.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="#" class="body-text">Dog Food Rachael Ray Nutrish®</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-10">
                                                <div class="divider"></div>
                                            </li>
                                            <li class="product-item gap14 mb-10">
                                                <div class="image no-bg">
                                                    <img src="images/products/18.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="#" class="body-text">Natural Dog Food Healthy Dog Food</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-10">
                                                <div class="divider"></div>
                                            </li>
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/19.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="#" class="body-text">Freshpet Healthy Dog Food and Cat</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="header-grid">
                        <div class="header-item country">
                            <select class="image-select no-text">
                                <option data-thumbnail="images/country/1.png">ENG</option>
                                <option data-thumbnail="images/country/9.png">VIE</option>
                            </select>
                        </div>
                        <div class="header-item button-dark-light">
                            <i class="icon-moon"></i>
                        </div>
                        <div class="header-item button-zoom-maximize">
                            <div class="">
                                <i class="icon-maximize"></i>
                            </div>
                        </div>
                        <div class="popup-wrap user type-header">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="header-user wg-user">
                                        <span class="image">
                                            <img src="images/avatar/user-1.png" alt="">
                                        </span>
                                        <span class="flex flex-column">
                                            <span class="body-title mb-2">Kristin Watson</span>
                                            <span class="text-tiny">Admin</span>
                                        </span>
                                    </span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3">
                                    <li>
                                        <a href="#" class="user-item">
                                            <div class="icon">
                                                <i class="icon-settings"></i>
                                            </div>
                                            <div class="body-title-2">Setting</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-item">
                                            <div class="icon">
                                                <i class="icon-headphones"></i>
                                            </div>
                                            <div class="body-title-2">Support</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-item">
                                            <div class="icon">
                                                <i class="icon-log-out"></i>
                                            </div>
                                            <div class="body-title-2">Log out</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Category infomation</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Category</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">New category</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- new-category -->
                                <div class="wg-box">
                                    <form class="form-new-product form-style-1" >
                                        <fieldset class="name">
                                            <div class="body-title">Product name <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Category name" name="text" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset>
                                            <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                                            <div class="upload-image flex-grow">
                                                <div class="item up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                        <input type="file" id="myFile" name="filename">
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="category">
                                            <div class="body-title">Select category icon</div>
                                            <div class="select flex-grow">
                                                <select class="">
                                                    <option>Select icon</option>
                                                    <option>icon 1</option>
                                                    <option>icon 2</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <div class="bot">
                                            <div></div>
                                            <button class="tf-button w208" type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /new-category -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/zoom.js"></script>
    <!-- <script src="js/switcher.js"></script> -->
    <script src="js/theme-settings.js"></script>
    <script src="js/main.js"></script>

</body>

</html>