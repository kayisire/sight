<?php include 'header.php'; ?>

<div id="titlebar" class="photo-bg" style="background-image: url(images/banner.jpg);">
    <div class="margin-top-55"></div>
    <div class="container">
        <div class="ten columns">
            <div class="resume-titlebar">
                <img src="images/avatar.png" alt="">
                <div class="resumes-list-content">
                    <h4 style="color:white;">{{profile.name}} <span style="color:#26ae61;">{{profile.situation}}</span></h4>
                    <span class="icons"> <a href="#"><i class="fa fa-map-marker"></i> {{profile.location}}</a></span>
                    <span class="icons"> <a href="#"><i class="fa fa-money"></i> {{profile.payroll}}</a></span>
                    <span class="icons"> <a href="#"><i class="fa fa-globe"></i> {{profile.web}}</a></span>
                    <span class="icons"> <a href="#"><i class="fa fa-envelope"></i> {{profile.email}}</a></span>
                    <div class="skills">
                        <?php for( $i = 1; $i <= 4; $i++ ){ ?>
                        <span>{{profile.skill}}</span>
                        <?php } ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="six columns">
            <div class="two-buttons">
                <a href="#small-dialog" class="popup-with-zoom-anim button"><i class="fa fa-star"></i> Rate This Profile</a>
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
                    <div class="small-dialog-headline">
                        <h2>Rate {{profile.name}}</h2>
                    </div>
                    <div class="small-dialog-content">
                        <form action="#" method="POST">
                            <select data-placeholder="Choose Star" class="chosen-select">
                                <option></option>
                                <option value="1">One Star (1)</option>
                                <option value="1">Two Stars (2)</option>
                                <option value="1">Three Stars (3)</option>
                                <option value="1">Four Stars (4)</option>
                                <option value="1">Five Stars (5)</option>
                            </select>
                            <div class="margin-top-10"></div>
                            <textarea placeholder="You can even give some 'constructive' feedback. ;)"></textarea>
                            <button class="send">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="sixteen columns">
        <div class="padding-right">
            <h3 class="margin-bottom-15">About Me</h3>
            <p class="margin-reset">
                {{profile.description}}
            </p>
        </div>
	</div>
</div>
<div class="margin-top-60"></div>
<?php include 'footer.php'; ?>