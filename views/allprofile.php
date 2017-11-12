<?php include 'header.php'; ?>

<div id="titlebar" class="photo-bg" style="background-image: url(images/banner.jpg);">
	<div class="container">
        <div class="margin-top-55"></div>
		<div class="ten columns">
			<h2>All Profiles</h2>
		</div>
	</div>
</div>
<div class="container">
    <div class="six columns">
        <p class="margin-bottom-25" style="float: left;">Choose which from the right dropdown box a <strong><a href="?categories">Category</a></strong> to display its profiles.</p>
    </div>
    <div class="ten columns">
        <select data-placeholder="Newest first" class="chosen-select-no-single">
            <option value="">{{category.name}}</option>
        </select>
    <div class="margin-bottom-35"></div>
    </div>
            <div class="sixteen columns">
                <div class="padding-right">
                    <ul class="job-list full">
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
                </div>
            </div>
        </div>
        <div class="margin-top-60"></div>
<?php include 'footer.php'; ?>