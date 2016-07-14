<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="nav-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/home.php" class="navbar-brand title">Matthew Brock</a>
		</div>
			<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav nav-pills pull-right">
				<li id="projects" class="<?php if( $mode == 'projects' ) { echo 'active'; } ?>"><a href="/projects.php">projects</a></li>
				<li id="updates" class="<?php if( $mode == 'updates' ) { echo 'active'; } ?>"><a href="/updates.php">blog</a></li>
				<li id="about" class="<?php if( $mode == 'about' ) { echo 'active'; } ?>"><a href="/about.php">about</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="content-holder">
