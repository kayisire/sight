<?php include 'header.php'; ?>

<div id="titlebar" class="photo-bg" style="background-image: url(images/banner.jpg);">
	<div class="container">
        <div class="margin-top-55"></div>
		<div class="ten columns">
			<h2>All Categories</h2>
		</div>
	</div>
</div>

<div id="categories">
    <?php for($a = 1; $a < 4; $a++){ ?>
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>{{category.title}}</h4></div>
            <?php for($i = 1; $i < 4; $i++){ ?>
            <div class="four columns">
				<ul>
					<li><a href="?allprofile">{{category.name}}</a></li>
					<li><a href="?allprofile">{{category.name}}</a></li>
					<li><a href="?allprofile">{{category.name}}</a></li>
					<li><a href="?allprofile">{{category.name}}</a></li>
				</ul>
            </div>
            <?php } ?>
		</div>
    </div>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>