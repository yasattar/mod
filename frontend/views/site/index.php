<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;
$this->title = 'Home | MOD WEB';
?>
    <!--HEADER-->
    <header id='header'>
        <div id='menu-bar' class='animated fadeIn'>
            <div class='container'>
                <div class='logo'>
                        <img src="img/logo.png" alt>
                </div>
                <nav  id="nav" class='nav'>
                    <ul class='nav-inner'>
                        <?php if(!Yii::$app->user->isGuest):?>
                             <li class='current'><a href="#header">Dashboard</a></li>
                        <?php endif;?>
                        <li class='current'><a href="#header">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#screenshots">Screens</a></li>
                        <li><a href="#reviews">Reviews</a></li>
                        <li><a href="#download">Download</a></li>
                        <li><a href="#contactus">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class='row'>	
                <?php if(Yii::$app->session->getFlash('success')):?>
                    <div class="alert alert-success">
                    <?php
                    echo Yii::$app->session->getFlash('success');
                    ?>
                    </div>
                <?php endif;?>
                <?php if(Yii::$app->session->getFlash('error')):?>
                    <div class="alert alert-danger">
                    <?php
                        echo Yii::$app->session->getFlash('error');
                    ?>
                    </div>
                <?php  endif;?>
                <div class='col-sm-10 col-sm-offset-1 col-md-7 col-md-offset-0 col-md-push-5 col-lg-6 col-lg-push-6 animated fadeInRight'>
                   
                    <?php if(Yii::$app->user->isGuest):?>
                    <!--<h1>Lawyers Diary is in smartphone .</h1>-->
                    <div id="login-render">
                         <?php echo $this->render("login",['model'=>$login]);?>
                    </div>
                    <div id="signup-render" style="display: none;">
                        <?php echo $this->render("signup",['model'=>$user]);?>
                    </div>
                    <?php endif;?>
                    
                </div>
                <div class='col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0 col-md-pull-7 col-lg-5 col-lg-pull-6 col-lg-offset-1'>
                    <img src="img/iPhone-header.png" id='header-img' class='img-responsive animated fadeInUp' alt>
                </div>
            </div>
        </div>
		<svg id='svg-header'>
			<defs>
				<linearGradient id="grad" x1="0%" y1="100%" x2="100%" y2="30%">
					<stop offset="8%" style="stop-color:rgb(23,188,184);stop-opacity:0.1" />
					<stop offset="50%" style="stop-color:rgb(23,188,184);stop-opacity:1" />
				</linearGradient>
			</defs>
			<rect id='svg-rect' width="3000" height="1050" fill="url(#grad)"/>
		</svg>
		<div id='menu-bar-fixed'>
                    <div class='container'>
                        <a class='logo scrollTo-header'><img src="img/logo-sm.png" alt></a>
                        <nav  id="nav-fixed" class='nav'>
                        <a id="show-nav" title="Show navigation"><div></div></a>
                        <a id="hide-nav" title="Hide navigation"><div></div></a>
                            <ul id='nav-ul' class='nav-inner'>
                                <?php if(!Yii::$app->user->isGuest):?>
                                    <li class='current'><a href="<?php echo  Url::to(['site/dashboard']); ?>">Dashboard</a></li>
                                <?php endif;?>

                                <li><a href="#header">Home</a></li>
                                <li class='current'><a href="#about">About</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#screenshots">Screens</a></li>
                                <li><a href="#reviews">Reviews</a></li>
                                <li><a href="#download">Download</a></li>
                                <li><a href="#contactus">Contact Us</a></li>
                                <li id='off-nav'></li>
                            </ul>
                        </nav>
                    </div>
		</div>
	</header>

	<!--ABOUT-->
	<section id='about'> 
		<div class="container">
			<div class='row wow fadeInUp'>	
                                   <div class='circle-icon-lg'>
						<div class='icon ion-ios7-ionic-outline'></div>
					</div>
					<div class='text'>
                                            <h3>The myofficediary.org story- </h3>
						<p>Registered in India & launched in June 2015. In Year 2014, the concept of myofficediary.org mobile application came into the mind of one practicing lawyer from Solapur, Maharashtra, India. He shared this idea to his parents. Parents promoted him to get this idea into reality. Now, the mother of that lawyer has established & started this myofficediary.org with the concept of her son. 
It has started with the one person, now there is a one team of 7 professionals. 
Now it’s just beginning. The object of this mobile application is to make the lawyers work digital, time saver & paperless. 
.</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!--FEATURES-->
	<section id='features'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2>Remarkable Features</h2>
				<p class='subtitle'>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
			</div>
			<div class='row'>	
				<div class='col-sm-4 col-md-4 col-lg-4 left wow fadeInLeft'>
					<div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Unique Design</h4>
							<p>Simple, attractive, sophisticated design & color combination to suit Lawyer profession.</p>
						</div>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-eye-outline'></div></div>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Paperless work</h4>
							<p>This application allows user to save paper which ultimately contribute to save trees & world.</p>
						</div>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-checkmark-empty'></div></div>
						</div>
					</div>
                                    <div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Easy availability</h4>
							<p>myofficediary.org is easily available on istore & Playstore.</p>
							</div>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-heart-outline'></div></div>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>	Time saver </h4>
							<p>Lawyer has very busy schedule. Everyone tries to save time. This application allows user to save time. It allows user to save repetitions of data. </p>
						</div>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-bolt-outline'></div></div>
						</div>
					</div>
				</div>
				<div class='col-sm-4 col-sm-push-4 col-md-4 col-md-push-4 col-lg-4 col-lg-push-4 right wow fadeInRight'>
					<div class='row'>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-folder-outline'></div></div>
						</div>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>	User friendly/ hassle free operations</h4>
							<p>Its user interface is very easy to understand. Agile for better result. All data is editable at any time anywhere .</p>
						</div>
					</div>
					
					<div class='row'>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-box-outline'></div></div>
						</div>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Sharing*(coming soon)- </h4>
							<p>Lawyer can share his screen/page through all available social sights.  Lawyer can mail his screen/page to his juniors or colleagues for better management of work. </p>
						</div>
					</div>
                                       <div class='row'>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-box-outline'></div></div>
						</div>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4> Sync*(coming soon) </h4>
							<p>If the diary of lawyer lost or misplaced or met with other misadventure then what provision is available? Yes, we have an answer for that; we are providing SyncMOD™ facility. This unique feature allows lawyer to save all generated data to the database of myofficediary.org. Anyone registered user can retrieve his all data to his phone anytime & anywhere.    </p>
						</div>
					</div>
				</div>
				<div class='col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-sm-pull-4 col-md-4 col-md-pull-4 col-lg-4 col-lg-pull-4'>
					<img src="img/iPhone-5C-white.png" class='img-responsive wow fadeInUp' alt>
				</div>
			</div>
		</div>
	</section>


	<!--BANNER-DOWNLOAD-->
	<section id='download-banner'>
		<div class="container">
			<p>
				<span class='text wow fadeInLeft'>
					<span class='bold'>Like what you see?</span><span class='normal'>Download the app right now</span>
				</span>
				<a class='btn btn-secondary scrollTo-download wow pulse delay-1s'>Download Now</a>
			</p>
		</div>
	</section>

	<!--SCREENSHOTS-->
	<section id='screenshots'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2>Screenshots</h2>
				<p class='subtitle'>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
			</div>
			<div id="screens-carousel" class="owl-carousel wow fadeInUp">
				<a href='img/screen1.png' class='item' data-lightbox-gallery="gallery1">
					<img src="img/screen1.png" class='img-responsive' alt>
				</a>
				<a href='img/screen2.png' class='item' data-lightbox-gallery="gallery1">
					<img src="img/screen2.png" class='img-responsive' alt>
				</a>
				<a href='img/screen3.jpg' class='item' data-lightbox-gallery="gallery1">
					<img src="img/screen3.jpg" class='img-responsive' alt>
				</a>
				<a href='img/screen1.png' class='item' data-lightbox-gallery="gallery1">
					<img src="img/screen1.png" class='img-responsive' alt>
				</a>
				<a href='img/screen2.png' class='item' data-lightbox-gallery="gallery1">
					<img src="img/screen2.png" class='img-responsive' alt>
				</a>
				<a href='img/screen3.jpg' class='item' data-lightbox-gallery="gallery1">
					<img src="img/screen3.jpg" class='img-responsive' alt>
				</a>
			</div>
		</div>
	</section>

	<!--REVIEWS-->
	<section id='reviews'>
		<div class="container">
			<div id="reviews-carousel" class="owl-carousel">
				<div class='item'>
					<div class='avatar'></div>
					<p class='quote'>The path of the righteous man is beset on all sides by the inequities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children.</p>
					<div class='author'>
						<div class='name'>Jules Winnfield</div>
						<div class='position'>CEO, Foot Massage Paradise</div>
					</div>
				</div>
				<div class='item'>
					<div class='avatar'></div>
					<p class='quote'>Welcome to Fight Club. The first rule of Fight Club is: you do not talk about Fight Club. The second rule of Fight Club is: you DO NOT talk about Fight Club! Third rule of Fight Club: someone yells "stop!", goes limp, taps out, the fight is over. Fourth rule: only two guys to a fight. Fifth rule: one fight at a time, fellas.</p>
					<div class='author'>
						<div class='name'>Tyler Durden</div>
						<div class='position'>CEO, Fight Club</div>
					</div>
				</div>
				<div class='item'>
					<div class='avatar'></div>
					<p class='quote'>The path of the righteous man is beset on all sides by the inequities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children.</p>
					<div class='author'>
						<div class='name'>Jules Winnfield</div>
						<div class='position'>CEO, Foot Massage Paradise</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--DOWNLOAD-->
	<section id='download'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2>Download the app</h2>
				<p class='subtitle'>Visit store and download app then please give your kind reviews to help us.</p>
			</div>
			<p class='download-buttons'>
                            <a class='btn btn-icon btn-secondary' href="javascript:void(0)" onclick="alert('Coming soon')"><span class='icon ion-social-apple'></span>App Store</a>
				<a class='btn btn-icon btn-primary' href="https://play.google.com/store/apps/details?id=com.myofficedairy.mod&hl=en"><span class='icon ion-social-android'></span>Play Store</a>
			</p>
			<div class='floating-phone wow fadeInRightBig'></div>
		</div>
	</section>

	<!--Newsletter-->
	<section id='newsletter'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2>Subscribe to our newsletter</h2>
				<p class='subtitle'>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
			</div>
                    <?php $form = ActiveForm::begin(); ?>                           

			<div id='newsletter-form'>
                            <input id="mailsubscribe-email" type="email" name="Mailsubscribe[email]" class="subscribe-input" placeholder="Enter your e-mail address..." required>
                            <button class='btn btn-primary subscribe-submit' type="submit">Subscribe</button>                             
                        </div>
                    <?php $form = ActiveForm::end(); ?>                           

                   
	</section>
        

</div>
        
	<!--DETAILED INFO-->
	<section id='contactus'>
		<div class="container">
		
                    <div class='row'>
                    
                        <div class="site-contact">
                            <h1><?= Html::encode($this->title) ?></h1>
                            <center> <h1 class="contactus1"><b>Contact Us</b></h1> 
                            <p>
                                If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
                            </p>
                            </center>
                            <div class="row">
                              <div class="col-xs-12 col-md-6">
                                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                         <?= $form->field($model, 'name') ?>
                                        <?= $form->field($model, 'email') ?>
                                        <?= $form->field($model, 'subject') ?>
                                        </div>
                                      <div class="col-xs-12 col-md-6">
                                        <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                        ]) ?>
                                        
                                        <div class="form-group">
                                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                        </div>
                             </div>
                            </div> 
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
        </section>
	<!--FOOTER-->
	<footer id='footer'>
		<div class="container">
			<div id='footer-content'>
				<h2><img src="img/logo.png" alt></h2>
				<p id='social-links'>
					<a href="https://www.facebook.com/myofficediary.org" class='icon ion-social-facebook'></a>
<!--					<a href="" class='icon ion-social-twitter'></a>-->
					<a href="https://plus.google.com/communities/112304999338119884096" class='icon ion-social-googleplus-outline'></a>
					<!--<a href="" class='icon ion-social-instagram'></a>-->
				</p>
				<p class='copyright'>Copyright © 2014 MyOfficeDiary.org</p>
			</div>
		</div>
	</footer>
	
  <script>
                        $(document).ready(function(){
                            $("#newuserbtn").click(function () {
                                $("#login-render").hide()
                                $("#signup-render").show();
                            }); 
                            $("#loginformbtn").click(function () {
                                $("#login-render").show()
                                $("#signup-render").hide();
                            }); 
                        });
                           
                        </script>          