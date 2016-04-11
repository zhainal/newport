<?php echo file_get_contents("src/includes/_head.php"); 
	  echo file_get_contents("src/includes/_menu.php"); ?>
<body id="home">

<!-- MOCKUPS -->
	<div class="floater-companion">
		<ul class="grid">
			<li class="mock1"><span class="s"></span></li>
			<li class="mock2"><span class="s"></span></li>
			<li class="mock3"><span class="s"></span></li>
			<li class="mock4"><span class="s"></span></li>
		</ul>
	</div>

<!-- CONTROLS -->
	<div class="arrows">
		<button class="btn arrow" onclick="$.fn.fullpage.moveSectionUp();"><i class="fa fa-chevron-up"></i></button>
		<button class="btn arrow" onclick="$.fn.fullpage.moveSectionDown();"><i class="fa fa-chevron-down"></i></button>
	</div>
<!-- CANVAS BG -->
	<canvas id="geometry"></canvas>

	<!-- CONTENT -->
	<div id="content">
	    <div class="section middle">
	    	<!-- main section -->
	    	<div class="slide" data-anchor="main">
	    		<div class="container">
	    			<h2>The Full Spectrum Designer You didn't know you needed.</h2>
	    			<button class="btn ghost" onclick="$.fn.fullpage.moveSectionDown();">
	    				See My Work
	    			</button>
	    			<button class="btn ghost" onclick="$.fn.fullpage.moveSlideRight();">
	    				About Me <i class="left fa fa-chevron-right"></i>
	    			</button>
	    		</div>
	    	</div>
	    	<!-- about me -->
    		<div class="slide" data-anchor="aboutme">
    			<div class="container">
	    			<h2>Hi, I'm Lucas.</h2>
	    			<h3>I am an Interaction Designer &amp; Developer from Brazil who lives in Boston, MA.</h3>
	    			<p>I'm looking for a team where I can roll up my sleeve and code while still maintaining beautiful UI.</p>
	    			<button class="btn ghost" onclick="$.fn.fullpage.moveSectionDown();">See My Work</button>
	    			<a class="btn ghost" target="_blank" href="./dist/docs/lucas-mosele-resume.pdf">Download My Resume</a>
    			</div>
    		</div>
	    </div>

	    <!-- SECTION 2 -->
	    <div class="section" id="work">
	    	<div class="floater">
				<figure class="description">
					<h3>Maxwell Health</h3>
					<ul class="tags">
						<li>Front-End </li>
						<li>Information Architecture</li>
						<li>Interaction Design</li>
					</ul>
					<p>I am responsible for developing, designing, and maintaining Maxwell Health's multiple corporate websites and overall public web presence. I focused on bringing the platforms from legacy code to scalable stylesheets, consistently modern design, and redesigned information architecture on the back end.</p>
					<a class="btn ghost" href="maxwell.php">Website Case Study</a>
					<a class="btn ghost" target="_blank" href="https://medium.com/@l_mosele/the-process-behind-our-end-of-year-report-bc6a71b0aca6#.mvo8kgik2">Yearly Report Case Study</a>
				</figure>
			</div>
	    </div>

	    <!-- SECTION 3 -->
	    <div class="section">
			<div class="floater">
				<figure class="description">
					<h3>SALT</h3>
					<ul class="tags">
						<li>User Experience</li>
						<li>User Interface</li>
						<li>Interaction Design</li>
					</ul>
					<p>As part of our product team, I worked on defining all brand UX guidelines, communicating with engineers, user testing, and designing user interfaces.</p>
					<a class="btn ghost" href="salt.php">Product Case Study</a>
				</figure>
			</div>
	    </div>

	    <!-- SECTION 4 -->
	    <div class="section">
			<div class="floater">
				<figure class="description">
					<h3>Maxi Cosi Mico Max</h3>
					<ul class="tags">
						<li>User Experience</li>
						<li>User Interface</li>
						<li>Interaction Design</li>
					</ul>
					<p>I was brought on to lead the design of the world's first car seat customizer ecommerce tool. We worked closely with their team and branding guidelines to create a uniquely Cosi shopping experience.</p>
					<a class="btn ghost" href="maxicosi.php">See Case Study</a>
				</figure>
			</div>
	    </div>

	    <!-- SECTION 5 -->
	    <div class="section">
			<div class="floater">
				<figure class="description">
					<h3>AllCells</h3>
					<ul class="tags">
						<li>User Experience</li>
						<li>User Interface</li>
						<li>Interaction Design</li>
					</ul>
					<p>I worked with Trellis to design the UX and UI of AllCell's entire new Ecommerce experience. I defined all architecture and UI guidelines from the product experience to the community and forum sites.</p>
					<a class="btn ghost" target="_blank" href="https://www.allcells.com/">Home Page</a>
					<a class="btn ghost" target="_blank" href="http://www.allcells.com/products/">Products</a>
					<a class="btn ghost" target="_blank" href="https://www.allcells.com/forum/products/">Forum</a>
				</figure>
			</div>
	    </div>

	    <!-- SECTION 6 -->
	    <div class="section middle" id="play">
			<a href="majestic.php" class="tile">
				<div class="preview majestic"></div>
				<div class="text">
					<h3>Majestic Casual App</h3>
					<p>Concept App for the music channel Majestic Casual designed using Sketch &amp; Flinto</p>		
					<span>See More <i class="fa fa-chevron-right"></i></span>
				</div>
			</a>
			<a href="#otherthing" class="tile">
				<div class="preview mayhem"></div>
				<div class="text">
					<h3>Model Mayhem</h3>
					<p>A quick PS5 mockup animated in Flinto of what I'd imagine Model Mayhem's app would look like.</p>		
					<span>See More <i class="fa fa-chevron-right"></i></span>
				</div>
			</a>
	    </div>

	     <!-- SECTION 7 -->
	    <div class="section middle">
			<a href="https://www.behance.net/gallery/25486943/STAR-WARS-ART-DECO-POSTERS-(PT-1)" target="_blank" class="tile">
				<div class="preview starwars"></div>
				<div class="text">
					<h3>Star Wars Art Deco</h3>
					<p>It's a goal of mine to illustrate my favorite planets from the Star Wars mythos, this is what I have so far.</p>
					<span>See More <i class="fa fa-external-link"></i></span>
				</div>
			</a>
			<a href="https://www.behance.net/gallery/25486739/GREAT-GATSBY-POSTER" target="_blank" class="tile">
				<div class="preview gatsby"></div>
				<div class="text">
					<h3>Great Gatsby Illustration</h3>
					<p>An illustration I made after reading The Great Gatsby.</p>
					<span>See More <i class="fa fa-external-link"></i></span>
				</div>
			</a>
	    </div>

	</div>

	


	<!-- SCRIPTS -->
	<script type="text/javascript" src="dist/js/jquery-3-alpha.min.js"></script>
	<script type="text/javascript" src="dist/js/jquery.fullpage.min.js"></script>
	<script type="text/javascript" src="dist/js/main.min.js"></script>
	
</body>
</html>