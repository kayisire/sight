<?php include 'header.php'; ?>

<div id="titlebar" class="photo-bg" style="background-image: url(images/banner.jpg);">
	<div class="container">
        <div class="margin-top-55"></div>
		<div class="ten columns">
			<h2>Leaderboards</h2>
		</div>
	</div>
</div>
<div class="container">
	<div class="six columns">
		<p class="margin-bottom-25" style="float: left;">Choose which from the right dropdown box a <strong><a href="?categories">Category</a></strong> to display its leaderboard.</p>
	</div>
	<div class="ten columns">
		<select data-placeholder="Newest first" class="chosen-select-no-single">
			<option value="">{{category.name}}</option>
		</select>
		<div class="margin-bottom-35"></div>
	</div>
	<div class="sixteen columns">
		<table class="manage-table resumes responsive-table">
			<tr>
				<th><i class="fa fa-line-chart"></i>&nbsp; Position</th>
				<th><i class="fa fa-user"></i> Fullnames</th>
				<th><i class="fa fa-terminal"></i> Skills</th>
				<th><i class="fa fa-map-marker"></i> Location</th>
				<th><i class="fa fa-money"></i> Payroll</th>
			</tr>
			<tr>
				<td class="title"><a href="?oneprofile">{{leaderboard.position}}</a></td>
				<td><a href="?oneprofile">{{leaderboard.name}}</a></td>
				<td>{{leaderboard.skills}}</td>
				<td>{{leaderboard.location}}</td>
				<td>{{leaderboard.payroll}}</td>
			</tr>	
		</table>
	</div>
</div>
<div class="margin-top-60"></div>
<?php include 'footer.php'; ?>