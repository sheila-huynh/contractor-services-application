<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>GroundUp</title>
	<meta name="description" content="free website template" />
	<meta name="keywords" content="enter your keywords here" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/portfolio.css" rel="stylesheet" type="text/css" />
	<link href="css/dark.css" rel="stylesheet" type="text/css" />
	<link href="css/customize.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
	<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
	  // we only want these styles applied when javascript is enabled
	  $('div.content').css('display', 'block');
	  // initially set opacity on thumbs and add additional styling for hover effect on thumbs
	  var onMouseOutOpacity = 0.67;
	  $('#thumbs ul.thumbs li, div.navigation a.pageLink').opacityrollover({
		mouseOutOpacity:   onMouseOutOpacity,
		mouseOverOpacity:  1.0,
		fadeSpeed:         'fast',
		exemptionSelector: '.selected'
	  });
	  // initialize advanced galleriffic gallery
	  var gallery = $('#thumbs').galleriffic({
		delay:                     3500,
		numThumbs:                 10,
		preloadAhead:              10,
		enableTopPager:            false,
		enableBottomPager:         false,
		imageContainerSel:         '#slideshow',
		controlsContainerSel:      '#controls',
		captionContainerSel:       '#caption',
		loadingContainerSel:       '#loading',
		renderSSControls:          true,
		renderNavControls:         true,
		playLinkText:              'Play Slideshow',
		pauseLinkText:             'Pause Slideshow',
		prevLinkText:              '&lsaquo; Previous Photo',
		nextLinkText:              'Next Photo &rsaquo;',
		nextPageLinkText:          'Next &rsaquo;',
		prevPageLinkText:          '&lsaquo; Prev',
		enableHistory:             true,
		autoStart:                 true,
		syncTransitions:           true,
		defaultTransitionDuration: 900,
		onSlideChange:             function(prevIndex, nextIndex) {
		  // 'this' refers to the gallery, which is an extension of $('#thumbs')
		  this.find('ul.thumbs').children()
			.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
			.eq(nextIndex).fadeTo('fast', 1.0);

		  // update the photo index display
		  this.$captionContainer.find('div.photo-index')
			.html('Photo '+ (nextIndex+1) +' of '+ this.data.length);
		},
		onPageTransitionOut:       function(callback) {
		  this.fadeTo('fast', 0.0, callback);
		},
		onPageTransitionIn:        function() {
		  var prevPageLink = this.find('a.prev').css('visibility', 'hidden');
		  var nextPageLink = this.find('a.next').css('visibility', 'hidden');
		  // show appropriate next / prev page links
		  if (this.displayedPage > 0)
			prevPageLink.css('visibility', 'visible');
		  var lastPage = this.getNumPages() - 1;
		  if (this.displayedPage < lastPage)
			nextPageLink.css('visibility', 'visible');
		  this.fadeTo('fast', 1.0);
		}
	  });
	  // event handlers for custom next / prev page links
	  gallery.find('a.prev').click(function(e) {
		gallery.previousPage();
		e.preventDefault();
	  });
	  gallery.find('a.next').click(function(e) {
		gallery.nextPage();
		e.preventDefault();
	  });
	});
	</script>
</head>

<body>
	<div id="main">
		<div id="header">
			<div id="welcome">
				<h1><span>Ground</span>UP</h1>
			</div><!--end welcome-->
			<div id="menubar">
				<ul id="menu">
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="ourwork.html">About Us</a></li>
					<li><a href="#">Sign Up</a></li>
				</ul>
			</div><!--end menubar-->
		</div><!--end header-->

		<div id="site_content">
			<div id="image_container">
				<!-- start gallery HTML containers -->
				<div class="navigation-container">
					<div id="thumbs" class="navigation">
						<a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>
							<ul class="thumbs noscript">
							<li>
								<a class="thumb" width="950px" height="450px" href="images/construction.jpg"><img width="79px" height="79px" src="images/construction_thumb.jpg" alt="one" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Construction Projects</div>
								</div>
							</li>
							<li>
								<a class="thumb" width="950px" height="450px" href="images/culinary.jpg"><img width="79px" height="79px" src="images/culinary_thumb.jpg" alt="two" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Cooking/Catering</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="images/tutoring.jpg"><img width="79px" height="79px" src="images/tutoring_thumb.jpg" alt="three" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Tutoring/Learning</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="images/lawncare.jpg"><img width="79px" height="79px" src="images/lawncare_thumb.jpg" alt="four" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Lawn Services</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="images/cleaning.jpg"><img width="79px" height="79px" src="images/cleaning_thumb.jpg" alt="one" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Cleaning Services</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="images/driver.jpg"><img width="79px" height="79px" src="images/driver_thumb.jpg" alt="two" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Transportation</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="images/entertainer.jpg"><img width="79px" height="79px" src="images/entertainer_thumb.jpg" alt="three" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Entertainment</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="images/movers.jpg"><img width="79px" height="79px" src="images/movers_thumb.jpg" alt="four" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Moving</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="images/webdev.jpg"><img width="79px" height="79px" src="images/webdev_thumb.jpg" alt="one" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Web Development</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="images/lawyer.jpg"><img width="79px" height="79px" src="images/lawyer_thumb.jpg" alt="two" /></a>
								<div class="caption">
									<div class="image-title portfolio_two">Legal Services</div>
								</div>
							</li>
						  </ul>
						<a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
					</div>
				</div>
				<div class="content">
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
						<div id="controls" class="controls portfolio_two"></div>
						<div id="caption" class="caption-container"></div>
					</div>
				</div>
				<!-- end gallery HTML containers -->
			</div><!--end image_container-->
		</div><!--end site_content-->
	</div><!--end main-->

	<div id="footer">
		<div id="footer_container">
			<div class="footer_container_box">
				<h4> </h4>
				<p style="text-align: justify; margin-top: 43px;">I had been thinking about building a deck in my backyard for years, but I didn’t like the pressure that salespeople from local contractors employ when giving estimates. By using GroundUp, I was able to have multiple contractors compete on price, and I was able to look at their reputations with the community before making my choice. Thank you for providing such an easy way for me to have my deck built.</p>
				<p style="display: block; float:right; margin-top: -20px;">Peggy Sue</p>
				<p style="clear: both; float:right; margin-top: -25px;">Grand Rapids, MI</p>
			</div><!--close footer_container_box-->
			<div class="footer_container_box">
				<h4>Testimonials</h4>
				<p style="text-align: justify">GroundUp is the best thing that has ever happened to my landscaping business. My company has always made quality and customer service high priorities, and GroundUp’s reputation system has allowed prospective clients to see how satisfied my previous customers have been. We’ve been able to expand across the city thanks to GroundUp!</p>
				<p style="display: block; float:right; margin-top: 10px;">John Doe</p>
				<p style="clear: both; float:right; margin-top: -25px;">Albuquerque, NM</p>
			</div><!--close footer_container_box-->
			<div class="footer_container_boxl">
				<p style="text-align: justify; margin-top: 43px;">I work for the City of Boulder’s facilities management department. GroundUp has enabled us to find contractors to maintain our buildings quickly and easily. It used to take hours to find reputable contractors to paint a school or reshingle a DMV center, but now it can all be done in one place! GroundUp has saved us countless hours over the past few months.</p>
				<p style="display: block; float:right; margin-top: 11px;">Al Smith</p>
				<p style="clear: both; float:right; margin-top: -25px;">Boulder, CO</p>
			</div><!--close footer_container_box1-->
			<br style="clear:both" />
			<br />
		</div><!--close footer_container-->
	</div><!--close footer-->

</body>
</html>
