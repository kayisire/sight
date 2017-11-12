<?php include 'header.php'; ?>

<div id="titlebar" class="photo-bg" style="background-image: url(images/banner.jpg);">
	<div class="container">
        <div class="margin-top-55"></div>
		<div class="ten columns">
			<h2>Create Profile</h2>
		</div>
	</div>
</div>
<div class="container">
	<div class="sixteen columns">
		<div class="submit-page">
			           
            <div class="divider"><h3>Personal Details</h3></div>

			<div class="form">
				<h5>Names</h5>
				<input type="text" placeholder="Enter your fullnames here...">
			</div>

			<div class="form">
				<h5>Personal Website <span>(optional)</span></h5>
				<input type="text" placeholder="http://">
            </div>
            
			<div class="form">
				<h5>Your Story <span>(in no more than 250 words)</span> </h5>
				<textarea rows="6" placeholder="Briefly describe yourself, projects you worked on, and some cool stuffs about you."></textarea>
			</div>

			<div class="form">
				<h5>Facebook Username / Page<span>(optional)</span></h5>
				<input type="text" placeholder="@yourpage">
			</div>

            <div class="form">
				<h5>Your Email</h5>
				<input class="search-field" type="text" placeholder="email@something.ext" value=""/>
			</div>

            <div class="form">
				<h5>Location <span>(optional)</span></h5>
				<input class="search-field" type="text" placeholder="e.g. Kigali" value=""/>
            </div>
            
			<div class="form">
				<h5>Profile Picture</h5>
				<label class="upload-btn">
				    <input type="file"/>
				    <i class="fa fa-upload"></i> Browse
				</label>
				<span class="fake-input">No file selected</span>
            </div>

            <div class="divider"><h3>Technical Expertise</h3></div>

			<div class="form">
				<h5>Current Situation</h5>
				<select data-placeholder="Full-Time" class="chosen-select-no-single">
					<option value="1">Full-Time Developer</option>
                    <option value="2">Part-Time Developer</option>
                    <option value="3">Freelance</option>
					<option value="4">Student</option>
				</select>
			</div>

			<div class="form">
				<div class="select">
					<h5>Skills</h5>
					<select data-placeholder="Choose Categories" class="chosen-select" multiple>
						<option value="1">C++</option>
						<option value="2">Javascript</option>
						<option value="3">PHP</option>
						<option value="4">Python</option>
						<option value="5">Java</option>
						<option value="6">Android</option>
						<option value="7">iOS</option>
                        <option value="8">Machine Learning</option>
                        <option value="8">Artificial Intelligence</option>
					</select>
				</div>
			</div>



			<div class="divider margin-top-0"></div>
            <a href="#" class="button big margin-top-5">Submit <i class="fa fa-arrow-circle-right"></i></a>

		</div>
	</div>
</div>
<div class="margin-top-60"></div>
<?php include 'footer.php'; ?>