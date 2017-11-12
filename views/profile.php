<?php include 'header.php'; ?>

<div id="titlebar" class="photo-bg" style="background-image: url(images/all-categories-photo.jpg);">
	<div class="container">
        <div class="margin-top-55"></div>
		<div class="ten columns">
			<h2>My Profile</h2>
		</div>
	</div>
</div>

<div class="container">

	<div class="sixteen columns">
		
		<ul class="tabs-nav">
			<li class="active"><a href="#tab1">My Reviews</a></li>
			<li><a href="#tab2">Modify Profile</a></li>
			<li><a href="#tab3">Delete Account</a></li>
		</ul>

		<div class="tabs-container">
            <div class="tab-content" id="tab1">
				Under Construction!
			</div>

			<div class="tab-content" id="tab2">
                <div class="margin-top-30"></div>
                <div class="notification notice closeable">
                <p><span>Hold on fella!</span> You are about to modify your profile. <a href="#" style="text-decoration:underline;">Click here</a> if you want to.</p>
			        <a class="close" href="#"></a>
		        </div>
            </div>

			<div class="tab-content" id="tab3">
                <div class="margin-top-30"></div>
                <div class="notification error closeable">
                <p><span>Hold on fella!</span> You are about to delete your account. <a href="#" style="text-decoration:underline;">Click here</a> if you are sure about this.</p>
			        <a class="close" href="#"></a>
		        </div>    
            </div>
		</div>
    </div>

</div>
<div class="margin-top-60"></div>
<?php include 'footer.php'; ?>