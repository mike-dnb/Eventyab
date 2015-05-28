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

    <!-- Custom CSS -->
    <link href="<?php echo $view['assets']->getUrl('css/stylish-portfolio.css') ?>" rel="stylesheet">

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

    <form class="navbar-form navbar-left" role="search">
  <img alt="Brand" src="<?php echo $view['assets']->getUrl('img/logo.png')?>" width=100 height=60/>
  <button type="submit" class="btn btn-default">Sign In</button>
  <button type="submit" class="btn btn-default">Sign Up</button>
  <button type="submit" class="btn btn-default">Send Feedback</button>
</form>
    <!-- Header -->
    <header id="top" class="header">
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
                        <div class="col-md-2 col-sm-6 col-md-offset-1">
                            <div class="service-item">
                                <img src="<?php echo $view['assets']->getUrl('img/team/ms.jpg')?>" />
                                <h4>
                                    <p class="our-team-name">Mohammad Soroush</p>
                                    <strong>Co-founder & role</strong>
                                </h4>
                                <p class="text-left text-justify">
	                                Mohammad received his PhD and MEng in Petroleum Engineering from the University of Calgary. 
	                                As a highly motivated, energetic, and well-organized petroleum engineer, he has succeeded in 
	                                several leadership and mentorship professional activities. Mohammad is co-founder of Iranian 
	                                Graduate Student Association (IGSA). His voluntary activities have been started in IGSA as 
	                                event manager and VP-communication and continued in many social events inside and outside the university.
                                </p>
                                <a href="https://www.linkedin.com" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
                            	<img src="<?php echo $view['assets']->getUrl('img/team/mr.jpg')?>" />
                                <h4>
                                    <p class="our-team-name">Mohammadreza Rahimi</p>
                                    <strong>Co-founder & role</strong>
                                </h4>
                                <p class="text-left text-justify">
                                	Mohammadreza received his M.Sc. in Geomatics Engineering from the University of Calgary, for developing 
                                	location recommendation systems for social networking services. Prior to that, he received a bachelor's 
                                	degree in Software Engineering from Sharif University of Technology in Iran. Mohammadreza is currently 
                                	the president of Iranian Graduate Students’ Association at the University of Calgary. Serving at this 
                                	position and as a volunteer in other positions, he has developed a large set of leadership skills which 
                                	he aims to commercializing them at Eventyab. He is currently a PhD student at the University of Calgary 
                                	and a web developer at Eventyab.</p>
                                <a href="https://www.linkedin.com" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
								<img src="<?php echo $view['assets']->getUrl('img/team/ma.jpg')?>" />
                            	<h4>
                                    <p class="our-team-name">Mohammad Hadi Aghahassani</p>
                                    <strong>Co-founder & role</strong>
                                </h4>
                                <p class="text-left text-justify">
                                	Hadi is originally from Iran. He moved to Calgary in 2011 to obtain his Master's degree in structural 
                                	engineering from the University of Calgary. Now he is working as a structural engineer with a consulting 
                                	firm in Calgary, where he applies his academic background in building industry. Hadi enjoys volunteering 
                                	for non-profit and charity organizations and loves to make new friends. He enjoys volleyball, swimming and 
                                	spending time with his lovely wife and awesome friends.
                                </p>
                                <a href="https://www.linkedin.com" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
                            	<img src="<?php echo $view['assets']->getUrl('img/team/mj.jpg')?>" />
                                <h4>
                                    <p class="our-team-name">Mohammad Ali Jazayeri</p>
                                    <strong>Co-founder & role</strong>
                                </h4>
                                <p class="text-left text-justify">
	                                Mohammad Ali received his MSc in Geomatics Engineering from the University of Calgary, where he belongs to. 
	                                During his Masters, Mohammad has done many voluntary activities in a spread spectrum of event advertisement 
	                                and event organizer to presidency of a governmental association. As he's a sociable person, he loves to do 
	                                gathering with his friends in all social events. To simplify this process, he started developing a web 
	                                application benefiting all people across the world. Having an optimistic attitude, he believes in success for 
	                                the future of this application.
                                </p>
                                <a href="https://www.linkedin.com/in/mojazayeri" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
                            	<img src="<?php echo $view['assets']->getUrl('img/team/mm.jpg')?>" />
                                <h4>
                                    <p class="our-team-name">Mohammad Moravvej</p>
                                    <strong>Co-founder & role</strong>
                                </h4>
                                <p class="text-left text-justify">
                          			Mohammad, so called Morooj or MHMH, loves spending time with friends and having fun activities with them, 
                          			no matter it is a daily gathering over a coffee or a big celebration like Nowruz! Morooj met Mohammad Ali 
                          			(Shahram), Mamrooz, and Soroush when studying his MSc at the University of Calgary, whilst already knew Hadi 
                          			from memorable undergrad years at the Sharif University of Technology. MHMH have been doing volunteer works 
                          			since he entered Sharif University and he has never gave up on that until now. Head of Research and Education, 
                          			VP-Events, and VP-Treasury of different groups and organizations in Iran and in Canada are some of the examples 
                          			of his leadership experience. Mohammad is currently pursuing his PhD at the University of Calgary and cooperates 
                          			with Civil Engineering Graduate Society (CEGS) as the VP-Events.
                                </p>
                                <a href="https://www.linkedin.com" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
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
    
    <section id="contact">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">
                    	Feel free to email us to provide some feedback on our website, give us suggestions, or to just say hello!
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="نام یا نام خانوادگی *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="آدرس ایمیل *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="شماره تماس *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control contactTextAread" placeholder="متن پیام *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">ارسال</button>
                            </div>
                        </div>
                    </form>
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