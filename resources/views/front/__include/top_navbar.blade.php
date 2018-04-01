
<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/front/index.html" style="margin-top: -15px;"><img src="/front/assets/img/logo.png" alt="" style="    max-height: 65px;"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <div class="button navbar-right">
                <a href='{{ action("Front\LoginController@getLogin") }}' class="btn navbar-btn nav-button wow bounceInRight login"> Войти</a>
            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                    <a href="/front/index.html" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Home <b class="caret"></b></a>
                    <ul class="dropdown-menu navbar-nav">
                        <li>
                            <a href="/front/index-2.html">Home Style 2</a>
                        </li>
                        <li>
                            <a href="/front/index-3.html">Home Style 3</a>
                        </li>
                        <li>
                            <a href="/front/index-4.html">Home Style 4</a>
                        </li>
                        <li>
                            <a href="/front/index-5.html">Home Style 5</a>
                        </li>

                    </ul>
                </li>

                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/front/properties.html">Properties</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/front/property.html">Property</a></li>
                <li class="dropdown yamm-fw" data-wow-delay="0.1s">
                    <a href="/front/#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Home pages</h5>
                                        <ul>
                                            <li>
                                                <a href="/front/index.html">Home Style 1</a>
                                            </li>
                                            <li>
                                                <a href="/front/index-2.html">Home Style 2</a>
                                            </li>
                                            <li>
                                                <a href="/front/index-3.html">Home Style 3</a>
                                            </li>
                                            <li>
                                                <a href="/front/index-4.html">Home Style 4</a>
                                            </li>
                                            <li>
                                                <a href="/front/index-5.html">Home Style 5</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Pages and blog</h5>
                                        <ul>
                                            <li><a href="/front/blog.html">Blog listing</a>  </li>
                                            <li><a href="/front/single.html">Blog Post (full)</a>  </li>
                                            <li><a href="/front/single-right.html">Blog Post (Right)</a>  </li>
                                            <li><a href="/front/single-left.html">Blog Post (left)</a>  </li>
                                            <li><a href="/front/contact.html">Contact style (1)</a> </li>
                                            <li><a href="/front/contact-3.html">Contact style (2)</a> </li>
                                            <li><a href="/front/contact_3.html">Contact style (3)</a> </li>
                                            <li><a href="/front/faq.html">FAQ page</a> </li>
                                            <li><a href="/front/404.html">404 page</a>  </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Property</h5>
                                        <ul>
                                            <li><a href="/front/property-1.html">Property pages style (1)</a> </li>
                                            <li><a href="/front/property-2.html">Property pages style (2)</a> </li>
                                            <li><a href="/front/property-3.html">Property pages style (3)</a> </li>
                                        </ul>

                                        <h5>Properties list</h5>
                                        <ul>
                                            <li><a href="/front/properties.html">Properties list style (1)</a> </li>
                                            <li><a href="/front/properties-2.html">Properties list style (2)</a> </li>
                                            <li><a href="/front/properties-3.html">Properties list style (3)</a> </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Property process</h5>
                                        <ul>
                                            <li><a href="/front/submit-property.html">Submit - step 1</a> </li>
                                            <li><a href="/front/submit-property.html">Submit - step 2</a> </li>
                                            <li><a href="/front/submit-property.html">Submit - step 3</a> </li>
                                        </ul>
                                        <h5>User account</h5>
                                        <ul>
                                            <li><a href="/front/register.html">Register / login</a>   </li>
                                            <li><a href="/front/user-properties.html">Your properties</a>  </li>
                                            <li><a href="/front/submit-property.html">Submit property</a>  </li>
                                            <li><a href="/front/change-password.html">Change password</a> </li>
                                            <li><a href="/front/user-profile.html">Your profile</a>  </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="/front/contact.html">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->
