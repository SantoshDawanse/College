<header class="header rs-nav">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul>
                        <li><a href="{{ route('frontend.pages.faq') }}"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                        <li><a href="{{ route('frontend.pages.contact') }}"><i class="fa fa-envelope-o"></i>contact@nic.edu.np</a></li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul>
                        <li>
                            <select class="header-lang-bx">
                                <option data-icon="flag flag-uk">English UK</option>
                            </select>
                        </li>
                        <li><a href="{{ route('admin.login') }}">Login</a></li>
                        <!-- <li><a href="register.html">Register</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
            <div class="container clearfix">
                <!-- Header Logo ==== -->
                <div class="menu-logo">
                    <a href="index.html"><img src="{{ asset('assets/images/logo-with-text-small-new.png') }}" alt=""></a>
                </div>
                <!-- Mobile Nav Button ==== -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- Author Nav ==== -->
                <div class="secondary-menu">
                    <div class="secondary-inner">
                        <ul>
                            <li><a href="https://www.facebook.com/nicollegeofficial/" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/national-integreted-college-b61073190/" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                            <!-- Search Button ==== -->
                            <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                        </ul>
                    </div>
                </div>
                <!-- Search Box ==== -->
                <div class="nav-search-bar">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span><i class="ti-search"></i></span>
                    </form>
                    <span id="search-remove"><i class="ti-close"></i></span>
                </div>
                <!-- Navigation Menu ==== -->
                <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                    <div class="menu-logo">
                        <a href="index-3.html"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('frontend.index') }}">Home</a>
                        </li>
                        <li><a href="javascript:;">About <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('frontend.pages.introduction')}}">Introduction</a>
                                </li>
                                <li><a href="{{ route('frontend.pages.chairman') }}">Message From Chairman</a>
                                </li>
                                <li><a href="{{ route('frontend.pages.principal') }}">Message From Principal</a>
                                </li>
                                <li><a href="{{ route('frontend.pages.od') }}">Message From Operational Director</a>
                                </li>
                                <li><a href="{{ route('frontend.pages.team') }}">Management Team</a></li>
                            </ul>
                        </li>
                        <li class="add-mega-menu"><a href="javascript:;">Programs <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu add-menu">
                                <li class="add-menu-left">
                                    <h5 class="menu-adv-title">Our Programs</h5>
                                    <ul>
                                        <li><a href="{{ route('frontend.pages.bhm') }}">Bachelor in Hotel Management (BHM)</a></li>
                                        <li><a href="{{ route('frontend.pages.bca') }}">Bachelor in Computer Applications (BCA)</a></li>
                                        <li><a href="{{ route('frontend.pages.bsw') }}">Bachelor in Social Works (BSW)</a></li>
                                        <li><a href="{{ route('frontend.pages.bbs') }}">Bachelor in Business Studies (BBS)</a></li>
                                        <li><a href="javascript:;">+2 Programs<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('frontend.pages.science') }}">Science</a></li>
                                                <li><a href="{{ route('frontend.pages.management') }}">Management</a></li>
                                                <li><a href="{{ route('frontend.pages.humanities') }}">Humanities</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="add-menu-right">
                                    <img src="{{ asset('assets/images/adv/adv.jpg') }}" alt="" />
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('frontend.pages.lifeatnic') }}">Life @ NIC</a></li>
                        <!-- <li class="add-mega-menu"><a href="javascript:;">Students<i class="fa fa-chevron-down"></i></a>			<ul class="sub-menu add-menu">
									<li class="add-menu-left">
										<ul>
											<li><a href="javascript:;">Academic Calendar</a>							
											</li>
											<li><a href="javascript:;">Admissions</a>										
											</li>
											<li><a href="javascript:;">Scholarships</a>
											</li>									
											<li><a href="javascript:;">Career Center</a>								
											</li>									
											<li><a href="javascript:;">Internships</a></li>
											<li><a href="javascript:;">College Life</a></li>
										</ul>
									</li>
									<li class="add-menu-right">
										<img src="assets/images/adv/adv.jpg" alt=""/>
									</li>
								</ul>
							</li> -->
                        <li><a href="{{ route('frontend.pages.contact') }}">Contact Us</a></li>

                    </ul>
                    <div class="nav-social-link">
                        <a href="https://www.facebook.com/nicollegeofficial/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/national-integreted-college-b61073190/"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Navigation Menu END ==== -->
            </div>
        </div>
    </div>
</header>