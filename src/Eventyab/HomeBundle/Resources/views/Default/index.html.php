<?php use Eventyab\HomeBundle\Constants\HomeConstants; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eventyab</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $view['assets']->getUrl('css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo $view['assets']->getUrl('css/stylish-portfolio.css') ?>" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php echo $view['assets']->getUrl('css/mine.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $view['assets']->getUrl('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="<?php echo $view['assets']->getUrl('js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $view['assets']->getUrl('js/bootstrap.min.js')?>"></script>
    
</head>

<body>
    <!-- Navigation -->
    <div class="container" id="top">
    	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
	    <nav id="sidebar-wrapper">
	        <ul class="sidebar-nav">
	            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
	            <li class="sidebar-brand">
	                <a href="#top"  onclick = $("#menu-close").click(); >Eventyab Menu</a>
	            </li>
	            <li>
	                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
	            </li>
	            <li>
	                <a href="#popular" onclick = $("#menu-close").click(); >Popular Events</a>
	            </li>
	            <li>
	                <a href="#events" onclick = $("#menu-close").click(); >Event Filtering</a>
	            </li>
	            <li>
	                <a href="#about" onclick = $("#menu-close").click(); >About Us</a>
	            </li>
	            <li>
	                <a href="#team" onclick = $("#menu-close").click(); >Our Team</a>
	            </li>
	            <li>
	                <a href="#contact" onclick = $("#menu-close").click(); >Contact Us</a>
	            </li>
	        </ul>
	    </nav>
	    <img alt="Brand" src="<?php echo $view['assets']->getUrl('img/logo.png')?>" width=100 height=60/>
        	<button type="submit" class="btn btn-info">Sign In</button>
	  		<button type="submit" class="btn btn-primary">Sign Up</button>
	  		<button type="submit" class="btn btn-default">Send Feedback</button>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="text-vertical-center">
            <h1>Eventyab</h1>
            <h3>Find events happening all around the world</h3>
            <?php echo $view['form']->start($form, array(
    				'attr' => array('class' => 'form-inline')
			)) ?>
			  <div class="form-group">
			    <?php echo $view['form']->row($form['name']); ?>
			  </div>
			  <div class="form-group">
			    <?php echo $view['form']->row($form['country']); ?>
			  </div>
			  <div class="form-group">
			    <?php echo $view['form']->row($form['date']); ?>
			  </div>
			  <div class="form-group">
			  	<?php echo $view['form']->row($form['search']); ?>
		  	  </div>
			<?php echo $view['form']->end($form) ?>
            <br>
			<?php echo $view['form']->widget($form) ?>
        </div>
    </header>
    
    <!-- Popular Events -->
    <section id="popular" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>The most popular events</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="<?php echo $view['assets']->getUrl('img/portfolio-1.jpg') ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="<?php echo $view['assets']->getUrl('img/portfolio-2.jpg') ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="<?php echo $view['assets']->getUrl('img/portfolio-3.jpg') ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="<?php echo $view['assets']->getUrl('img/portfolio-4.jpg') ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Map -->
    <section id="events" class="map">
    	<div role="tabpanel">
    	  	<!-- Nav tabs -->
		    <ul class="nav nav-pills nav-justified" role="tablist" id="eventTab">
		    	<li class="active" role="presentation">
					<a href="#calendar" role="tab" aria-controls="calendar" data-toggle="pill">Calendar View</a>
				</li>
				<li role="presentation">
					<a href="#map" role="tab" aria-controls="map" data-toggle="pill">Map View</a>
				</li>
			</ul>
		
			<!-- Tab panes -->
		  	<div class="tab-content">
		  		<div role="tabpanel" class="tab-pane fade in active" id="calendar">
		  			...........................................
		  		</div>
		    	<div role="tabpanel" class="tab-pane fade" id="map">
		    		<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
		    			src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
				        <br />
				        <small>
				            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
				        </small>
			        </iframe>
		    	</div>
		  	</div>
        </div>
    </section>
    
    <br />
    
    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Started with nothing! Will achieve everything!</h2>
                    <p class="lead">
						Wondering why your events never be sold-out although you pay so much on advertisement?
						Are you bored from work and want to have some fun with your friends but don’t know where to go?
						Our goal in EventYab is to connect people throughout the world by helping them create their own events, advertise them or invite their friends over, find fun events of their interests at their neighbourhood, buy the best tickets with the best prices, and so many more. EventYab helps you create, advertise, invite, find, and attend events, very fast, very simple.
					</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Team -->
    <section id="team" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Our Team</h2>
                    <hr class="small">
                    <div class="row">
                    <?php for($i = 0; $i < sizeof(HomeConstants::$team_name); $i++) {
                    		$extraClass = ($i == 0) ? 'col-md-offset-1':'';
                    		echo '<div class="col-md-2 col-sm-6 '.$extraClass.'">
									<div class="service-item">
										<img src="'.$view['assets']->getUrl(HomeConstants::$team_image[$i]).'" />
										<h4>
    	                                	<p class="our-team-name">'.HomeConstants::$team_name[$i].'</p>
        	                            	<strong>'.HomeConstants::$team_role[$i].'</strong>
            	                    	</h4>
                	                	<p class="text-left text-justify">'.HomeConstants::$team_bio[$i].'</p>
                    	            	<a href="'.HomeConstants::$team_linkedin[$i].'" class="btn btn-light">Learn More</a>
                        			</div>    
                        		</div>';
                    		}?>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Vertically Centered Text</h1>
        </div>
    </aside>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">
                    	Get in touch and let us know what you think, or just say hello!
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Get in touch</strong>
                    </h4>
                    <!-- TBD Later
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                     -->
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Eventyab 2015</p>
                    <p>
    	                <a href="<?php echo $view['assets']->getUrl('Eventyab-PrivacyPolicy.pdf')?>">Terms of Use - Privacy Policy
						</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

<script>
// Closes the sidebar menu
$("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

// Opens the sidebar menu
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

// Scrolls to the selected menu item on the page
$(function() {
    $('a[href*=#]:not([href=#map]):not([href=#calendar])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
</script>