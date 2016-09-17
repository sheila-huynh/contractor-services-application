<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>Ground Up</title>
    <meta name="description" content="free website template" />
    <meta name="keywords" content="enter your keywords here" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/portfolio.css" rel="stylesheet" type="text/css" />
    <link href="css/dark.css" rel="stylesheet" type="text/css" />
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
        autoStart:                 false,
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
                <h1><span>Ground</span> UP</h1>
            </div><!--end welcome-->
            <div id="menubar">
                <ul id="menu">
                    <li class="current"><a href="index.html">Home</a></li>
                    <li><a href="ourwork.html">Our Work</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
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
                                <a class="thumb" href="images/1.jpg"><img src="images/1_thumb.jpg" alt="one" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/2.jpg"><img src="images/2_thumb.jpg" alt="two" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">Another picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/3.jpg"><img src="images/3_thumb.jpg" alt="three" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A third picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/4.jpg"><img src="images/4_thumb.jpg" alt="four" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A picture of some apartments</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/1.jpg"><img src="images/1_thumb.jpg" alt="one" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/2.jpg"><img src="images/2_thumb.jpg" alt="two" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">Another picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/3.jpg"><img src="images/3_thumb.jpg" alt="three" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A third picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/4.jpg"><img src="images/4_thumb.jpg" alt="four" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A picture of some apartments</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/1.jpg"><img src="images/1_thumb.jpg" alt="one" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/2.jpg"><img src="images/2_thumb.jpg" alt="two" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">Another picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/3.jpg"><img src="images/3_thumb.jpg" alt="three" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A third picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/4.jpg"><img src="images/4_thumb.jpg" alt="four" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A picture of some apartments</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/1.jpg"><img src="images/1_thumb.jpg" alt="one" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/2.jpg"><img src="images/2_thumb.jpg" alt="two" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">Another picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/3.jpg"><img src="images/3_thumb.jpg" alt="three" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A third picture of an office building</div>
                                </div>
                            </li>
                            <li>
                                <a class="thumb" href="images/4.jpg"><img src="images/4_thumb.jpg" alt="four" /></a>
                                <div class="caption">
                                    <div class="image-title portfolio_two">A picture of some apartments</div>
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
                <h4>Latest Work</h4>
                <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
                <a href="ourwork.html">Read more</a>
            </div><!--close footer_container_box-->
            <div class="footer_container_box">
                <h4>Latest Testimonials</h4>
                <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
                <a href="testimonials.html">Read more</a>
            </div><!--close footer_container_box-->
            <div class="footer_container_boxl">
                <h4>Latest Projects</h4>
                <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
                <a href="projects.html">Read more</a>
            </div><!--close footer_container_box1-->
            <br style="clear:both" />
            <br />
            <a href="http://fotogrph.com/">Images</a> | website template by <a href="http://www.araynordesign.co.uk">ARaynorDesign</a>
        </div><!--close footer_container-->
    </div><!--close footer-->

</body>
</html>
