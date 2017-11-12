<?php include 'header.php'; ?>

        <div class="clearfix"></div>
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>
                    <li data-fstransition="fade" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                        <img src="images/home.jpg" alt="">
                        <div class="caption title sfb" data-x="0" data-y="195" data-speed="400" data-start="800" data-easing="easeOutExpo">
                            <h2>Discover The Finest!</h2>
                        </div>
                        <div class="caption text sfb" data-x="0" data-y="270" data-speed="400" data-start="1200" data-easing="easeOutExpo">
                            <p>Review and rate Kigali's brighest developers, <br>and get the opportunity to interact with most of them on real world projects.</p>
                        </div>
                        <div class="caption sfb" data-x="0" data-y="400" data-speed="400" data-start="1600" data-easing="easeOutExpo">
                            <a href="#" class="slider-button">Get Started</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section-background top-0" id="get-started">
            <div class="container">
                <div class="one-third column">
                    <div class="icon-box rounded alt">
                        <a href="?addprofile">
                            <i class="ln ln-icon-Add-UserStar"></i>
                            <h4>Add Profile</h4>
                        </a>
                        <p>Create a profile that will let you be reviewed by the rest of community. Don't worry, we made sure that this process is the easiest of all.</p>
                    </div>
                </div>
                <div class="one-third column">
                    <div class="icon-box rounded alt">
                        <a href="?allprofile">
                            <i class="ln ln-icon-Search-People"></i>
                            <h4>Review profiles</h4>
                            <p>Discover and rate developer profiles around the circle. Here you'll have a chance to review all developer's profiles and rate them as you wish.</p>
                        </a>
                    </div>
                </div>
                <div class="one-third column">
                    <div class="icon-box rounded alt">
                        <a href="#">
                            <i class="ln ln-icon-Business-Mens"></i>
                            <h4>Build Connections</h4>
                        </a>
                        <p>Pst! Did I tell you that you can connect with cool people on this platform. Yeah its cool right!<br> Just read attentively profiles posted here</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="sixteen columns">
                <h3 class="margin-bottom-25">Categories</h3>
                <ul id="popular-categories">
					<?php for($i = 0; $i < 8; $i++){ ?>
					<li><a href="?allprofile">{{category.name}}</a></li>
					<?php } ?>
                </ul>
                <div class="clearfix"></div>
                <div class="margin-top-30"></div>
                <a href="?categories" class="button centered">Browse All Categories</a>
                <div class="margin-bottom-50"></div>
            </div>
        </div>
        <div class="container">
            <div class="sixteen columns">
                <div class="padding-right">
                    <h3 class="margin-bottom-25">Recent Uploaded Profiles</h3>
                    <ul class="job-list">
                        <?php for($i = 0; $i < 5; $i++){ ?>
                        <li>
                            <a href="?oneprofile">
                                <img src="images/avatar.png" alt="">
                                <div class="job-list-content">
                                    <h4>{{profile.fullnames}}</h4>
                                    <div class="job-icons">
                                        <span><i class="fa fa-terminal"></i> {{profile.skills}}</span>
                                        <span><i class="fa fa-map-marker"></i> {{profile.location}}</span>
                                        <span><i class="fa fa-money"></i> {{profile.payroll}}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                        </li>
                        <?php } ?>
                    </ul>
                    <a href="?allprofile" class="button centered">Show More Profile</a>
                    <div class="margin-bottom-55"></div>
                </div>
            </div>
        </div>

<?php include 'footer.php'; ?>