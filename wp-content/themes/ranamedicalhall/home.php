<?php /* Template Name: Home */ ?>

<?php get_header(); ?>


<!-- Start: Header Slider
    ============================= -->
<main class="home-page">
	<header>
		<div class="row">
			<div class="col-md-12">
				<div class="header-slider">
					<div class="header-single-slider">
						<figure style="margin:0 0 0rem;">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/Instant-treatment-without-side-effects-for-Gonorrhoea-Syphilis-Herpes-Chlamydia.jpg'; ?>" alt="Sexually Transmitted Diseases">
							<figcaption>
								<div class="content">
									<div class="container inner-content text-right">
										<h3 class="headone">Sexually Transmitted Diseases</h3>
										<h1 class="headtwo">Instant Relief from all types<br />of contagious Sexual Diseases</h1>
										<p>Instant treatment without side effects for * Gonorrhoea * Syphilis * Herpes * Chlamydia</p>

									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="header-single-slider">
						<figure style="margin:0 0 0rem;">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/Cure-the-Erection-Problem.jpg'; ?>" alt="Men's sexual health and treatment">
							<figcaption>
								<div class="content">
									<div class="container inner-content text-right">
										<h3 class="headone">Erectile Dysfunction</h3>
										<h1 class="headtwo">Cure the Erection Problem<br>Permanently with Unani</h1>
										<p>Never Mind From Now ! Treatment for the inability to develop and maintain erection </p>

									</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="header-single-slider">
						<figure style="margin:0 0 0rem;">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/Overcome-your-frustration-for-premature-ejaculation.jpg'; ?>" alt="Men's sexual health and treatment">
							<figcaption>
								<div class="content">
									<div class="container inner-content text-right">
										<h3 class="headone">Premature Ejaculation</h3>
										<h1 class="headtwo">Overcome your frustration and<br>sexual distress with our<br>Herbal Unani Treatment</h1>
										<p> Herbal treatment strictly based Unani System of Medicine and natural Ayurvedic Healers.</p>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>


				</div>
			</div>
		</div>
	</header>
	<section id="wcu" style="background-color:rgba(33, 163, 163, 0.86); padding: 50px 0">
		<div class="container">
			<form action="<?php echo get_stylesheet_directory_uri(); ?>/forms/index-form.php" method="post" class="wpcf7-form" id="home-form">
				<div class="row">
					<div class="col-12">
						<h4 style="color:#fff;" class="mb-2">TALK TO OUR DOCTOR</h4>
					</div>
					<div class="col-lg-6 col-12">

						<div class="form-group">
							<input type="text" name="name" id="name" value="" size="40" class="form-control" required="" aria-required="true" aria-invalid="false" placeholder="Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email Address" required="" maxlength="50">
						</div>
						<div class="form-group">
							<input type="number" name="age" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode))) return false;" id="age" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Age" required="">
						</div>
						<div class="form-group">
							<input type="tel" name="tel" id="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="Phone Number" required="" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;">
						</div>


					</div>
					<div class="col-lg-6 col-12">
						<div class="form-group">
							<input type="text" name="location" id="location" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-location wpcf7-validates-as-required wpcf7-validates-as-location form-control" aria-required="true" aria-invalid="false" placeholder="Location" minlength="2" maxlength="40" required="">
						</div>

						<div class="form-group">
							<select name="disorder" id="disorder" class="" aria-required="true" aria-invalid="false" required="">
								<option value="">Consulting For</option>
								<option value="Erectile Dysfunction">Erectile Dysfunction</option>
								<option value="Premature Ejaculation">Premature Ejaculation</option>
								<option value="Male Infertility">Male Infertility</option>
								<option value="Penile Enhancement">Penile Enhancement</option>
								<option value="Venereal Diseases">Venereal Diseases</option>
								<option value="Gonorrhoea">Gonorrhoea</option>
								<option value="Syphilis">Syphilis</option>
								<option value="Herpes">Herpes</option>
								<option value="Nocturnal Emissions">Nocturnal Emissions</option>
								<option value="Hijama">Hijama</option>
								<option value="Prostate Enlargement">Prostate Enlargement</option>
								<option value="Leucorrhoea">Leucorrhoea</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="form-group">
							<textarea name="mesg" id="mesg" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control form-textarea" aria-required="true" aria-invalid="false" placeholder="Description" required=""></textarea>
						</div>
						<!-- <div class="g-recaptcha" data-sitekey="6Ldh_bIUAAAAAOq1YnZNm64RYVd53IH7a3pdNH8m"></div> <div class="form-group"> -->

						<!-- <button type="submit" name="submit" id="submit" class="submitbanner g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>Submit</button>  -->
						<!-- <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"> -->
						<!-- <input type="hidden" name="action" value="validate_captcha"> -->
						<div class="g-recaptcha" data-sitekey="6Lfpx90ZAAAAAJgrEVr0ALmZTBO3i2xOgKvSP2Ag"></div> <br />
						<button type="submit" name="submit" id="submit" class="submitbanner">Submit</button>
					</div>


				</div>

		</div>
		</form>
		</div>
	</section>


<!-- End: Header Slider
    =============================
<section id="wcu">
<div class="container" style="background-color:rgba(33, 163, 163, 0.86);" id="desktopfrm">
<form action="<?php echo get_stylesheet_directory_uri(); ?>/forms/bannerform.php" method="post" class="wpcf7-form" >
<div class="row">      
<div class="col-lg-6 col-12">
  	<h4 style="color:#fff;">TALK TO OUR DOCTOR</h4>
	 <div class="form-group">
	<input type="text" name="name" id="name" value="" size="40" class="form-control" required="" aria-required="true" aria-invalid="false" placeholder="Name" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
  </div>
   <div class="form-group">
<input type="email" name="email" id="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email Address" required="" maxlength="50">
 </div>
 
 <div class="form-group">
<input type="text" name="age" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode))) return false;" id="age" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Age" required="" >
 </div>
 <div class="form-group">
	<input type="tel" name="tel" id="tel"value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="Phone Number" required="" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;">
 </div>		
</div>
<div class="col-lg-6 col-12">
 <div class="form-group">
<input type="text" name="location" id="location" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-location wpcf7-validates-as-required wpcf7-validates-as-location form-control" aria-required="true" aria-invalid="false" placeholder="Location" required="">
 </div>	
<div class="form-group">
<select name="disorder" id="disorder" class="" style="width: 90%;padding: .375rem .75rem;
    font-size: 1rem;line-height: 1.5;color: #495057;background-color: #fff;background-image: none;
    background-clip: padding-box;border: 1px solid #ced4da;border-radius: .25rem;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;margin-left: 20px;" aria-required="true" aria-invalid="false" required="">
<option value="">Consulting For</option>
<option value="Erectile Dysfunction">Erectile Dysfunction</option>
<option value="Premature Ejaculation">Premature Ejaculation</option>
<option value="Male Infertility">Male Infertility</option>
<option value="Penile Enhancement">Penile Enhancement</option>
<option value="Venereal Diseases">Venereal Diseases</option>
<option value="Gonorrhoea">Gonorrhoea</option>
<option value="Syphilis">Syphilis</option>
<option value="Herpes">Herpes</option>
<option value="Nocturnal Emissions">Nocturnal Emissions</option>
<option value="Hijama">Hijama</option>
<option value="Prostate Enlargement">Prostate Enlargement</option>
<option value="Leucorrhoea">Leucorrhoea</option>
<option value="Other">Other</option>
</select>
</div>
 
<div class="form-group">
<textarea name="mesg" id="mesg" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control form-textarea" aria-required="true" aria-invalid="false" placeholder="Description" required=""></textarea>
</div> 
<input type="submit" name="submit" id="submit" class="submitbanner2"/>
</div>
</div>
</div> 
</form>
</div>
</section>-->

<!--row ends here





    <!-- End: Contact
    ============================= -->
<section id="wcu">
	<div class="container">
		<div class="row">
			<div class="video-section">

			</div>
			<div class="offset-lg-6 col-lg-6 col-12 order-1 order-lg-2 wcu-content">
				<h2>Welcome To Dr Rana's Medical Hall</h2>
				<p><b>Crafting The Spousal Art...SINCE 1960...</b></p><br>
				<p>Dr Rana's Medical Hall is a deemed medical institution of the highest repute with a strictly strong foot hold in the basic tenets & principles of the Unani-Ayurveda systems of medicine. A galaxy of Herbal Clinics with a profound healing experience in the treatment of Men's Sexual Health and treatment, SEXUAL DISORDERS, INFERTILITY & expert executors of HIJAMA, RMH figures out as the most desirable sexual clinic of the state spanning over a period of nearly 6 decades (Men's sexual health and treatment)....
				</p>
				<p>
				</p>

			</div>
		</div>
	</div>
</section>

<!-- Start: Our Service
    ============================= -->
<section id="services" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12 text-center">
				<div class="section-title">
					<h2>Our Speciality Treatments - What We Do</h2>
					<!--	<p>Our Speciality Treatments</p>-->
				</div>
			</div>
		</div>
		<div class="row" id="onediv">
			<div class="col-lg-3 col-md-6 col-sm-6 mb-5">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service01.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Erectile Dysfunction')) ?>">Erectile Dysfunction</a></h4>
					<p>Are you a man who repeatedly gets loosing the ‘charge’ at the very start of intimacy? Come, visit RMH... We have the remedy and solution, strictly based on 100% safe & natural Unani-Ayurveda System.</p>

				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mb-5">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service02.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Premature Ejaculation')) ?>">Premature Ejaculation</a></h4>
					<p>Does your ‘Volcano’ erupt way ahead of your culmination…? RMH is at your rescue with 100% Herbal & effective Unani medicine.</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mb-5">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service03.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Male Infertility')) ?>">Male / Female Infertility</a></h4>
					<p>Marraiges are made in heaven.Infertility is never a curse. Together, with 100% effective, Herbal Unani treatment let us find the way to Cradle your Dreams…</p>


				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mb-5">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service04.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Penile Enhancement')) ?>">Penile Enhancement</a></h4>
					<p>Know the facts & myths about Penile Size and Enhancement from our qualified doctors who can help you with counselling & 100% effective, safe and Herbal Unani treatment.</p>
				</div>
			</div>

		</div>

		<div class="row" id="twodiv" style="display:none;">
			<div class="col-lg-3 col-md-6 col-sm-6 mb-5">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service05.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Venereal Diseases')) ?>">Venereal Diseases</a></h4>
					<p>At RMH, with 100% Herbal, safe & proven Unani treatment… the venomous VD stands wiped out….</p>

				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service06.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Gonorrhea')) ?>">Gonorrhoea</a></h4>
					<p>The killer disease is FRAMED by RMH, with our proven, 100% herbal Unani medicine.Gonorrhoea is a sexually transmitted disease caused by a bacterium called Neisseria gonorrhoeae.</p>

				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service07.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Syphilis')) ?>">Syphilis</a></h4>
					<p>Get it ‘withered’ at the budding stage!!!... RMH helps you to get rid of this by our 100% Herbal, effective & proven Unani treatment.</p>

				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service08.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Herpes')) ?>">Herpes</a></h4>
					<p>Genital Herpes, often simply called as Herpes . RMH holds a track record of 65% satisfied* & cured clients from the dreadful herpes with the aid of 100% Herbal, pure Unani secret medicine.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service09.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Hijama')) ?>">Hijama</a></h4>
					<p>Hijama comes from the root word al-hajm.Hijama is the complete cure therapy for every existing ailment, as derived from the prophetic verse. Humbly we say, our doctors are blessed to provide you that divine treatment.</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service10.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Prostate Enlargement')) ?>">Prostate Enlargement</a></h4>
					<p>Males, leave the tensions of surgery and medical side effects...RMH has a keen treatment line up towards this based on effective, safe Unani Herbal formulae.</p>
				</div>
			</div>


			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service11.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Leucorrhoea')) ?>">Leucorrhoea</a></h4>
					<p>RMH has the perfect, natural, safe and effective Unani medicines for ladies with Leucorrhoea (White Discharge) No more tensions… Stay active… Stay gorgeous forever.</p>
				</div>
			</div>


			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="service-box text-center">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/home/service12.png'; ?>" alt="">
						<figcaption>
							<div class="inner-text">
								<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book now</a>
							</div>
						</figcaption>
					</figure>
					<h4><a href="<?php echo get_permalink(get_page_by_title('Nocturnal Emissions')) ?>">Nocturnal Emissions</a></h4>
					<p>Awake!!!! ....no more 'WET' dreams..Wet dreams are quite natural when it happens once or twice in a month. On the other hand it needs medical attention.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center;" id="buttonDiv">
				<input type="button" name="showMore" id="showMore" value="Show More" class="wpcf7-form-control wpcf7-submit btn btn-make-app-medium">
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center;display:none;" id="buttonDiv2">
				<input type="button" name="showLess" id="showLess" value="Show Less" class="wpcf7-form-control wpcf7-submit btn btn-make-app-medium">
			</div>

		</div>
	</div>
	</div>
</section>
<!-- End:  Our Service
============================= -->






<!-- Start: Pricing
============================= -->
<section id="pricing" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12 text-center">
				<div class="section-title">
					<h2>Our Specialities - Men's Sexual Health and treatments</h2>
					<!--<hr>
	<p>You can select a package from the list below to save more</p>-->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
				<div class="pricing-box text-center" style="background-color:rgba(102,160,43,0.9);">
					<h3>Unani</h3>
					<p style="min-height: 200px;">Unani system is based on the Hippocratic theory that a perfect balance of ‘arkan’ (elements), ‘akhlat’ (humours) and ‘mizaj’ (temperament) helps in keeping the body and mind healthy.</p>
					<p></p>
					<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book Now</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
				<div class="pricing-box text-center" style="background-color:rgba(240,78,78,0.9);">

					<h3>Sextracts</h3>
					<p style="min-height: 200px;">We specialize in treating all kinds of Sexual Disorders, Sexually Transmitted Diseases, Male and Female infertility through 100% Herbal medicines, as well as Authentic Hijama.</p>
					<p></p>
					<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book Now</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
				<div class="pricing-box text-center" style="background-color:rgba(56,202,219,0.9);">
					<h3>Ayurveda</h3>
					<p style="min-height: 200px;">Ayurveda are an invaluable link to understanding, in detail, naturally healthy living. People everywhere are realizing the importance and benefits of taking personal responsibility for one’s own well being.</p>
					<p></p>
					<a href="<?php echo get_permalink(get_page_by_title('Consultation Form')) ?>" class="boxed-btn">Book Now</a>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
				<div class="pricing-box text-center" style="background-color:rgba(103,57,182,0.9)">
					<h3>Hijama</h3>
					<p style="min-height: 200px;">Hijama comes from the root word al-hajm, means 'sucking'. Cupping is the modern term of medical treatment in which a partial vacuum is created in cups that positioned onto the surface of the body. </p>
					<p></p>
					<a href="#contact" class="boxed-btn">Book Now</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- End: Pricing
    ============================= -->
<!-- Start Contact list Menu -->
<section id="beauticians" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12 text-center">
				<div class="section-title">
					<h2>Meet Us At</h2>
					<p>You can meet us at following locations</p>
				</div>
			</div>

			<div class="cards-wrapper">
				<div class="row">
				<div class="col-lg-4 col-12 text-center">
				<div class="info-box">
					<i class="fas fa-map-marker"></i>
					<h4>Corporate Clinic - Ernakulam / Kochi</h4>
					<p>Head Office, Second floor, Kochi Metro Pillar #689, Shenoys Junction,
						M.G. Road, Ernakulam- 682035</p>
					<p>Kochi, Kerala, India</p>
					<p>Monday to Saturday</p> Timings <p>11 am - 1 pm | 5 pm - 7 pm</p>
					<p>Sunday - 11.30 am - 1.30 pm</p>
				</div>
			</div>

			<div class="col-lg-4 col-12 text-center">
				<div class="info-box">
					<i class="fas fa-map-marker"></i>
					<h4>Kottayam Branch</h4>
					<p>Surya Guest Line,Thirunakkara Temple,
						Thekkenada (South End) ,
						Near Sri Rangom Auditorium, Pin - 686001</p>
					<p>Kottayam, Kerala, India</p>
					<p>Consultation on Monday to Thursday</p>
					<p>Note : Friday (with prior appointment only)</p>
					Timing - 1pm - 7.30 pm</p>
				</div>
			</div>

			<div class="col-lg-4 col-12 text-center">
				<div class="info-box">
					<i class="fas fa-map-marker"></i>
					<h4>Thrissur Branch</h4>
					<p>P.M.A. Building, Second floor,
						Post Office road, Opposite Indian Bank, Pin - 680001</p>
					<p>Thrissur, Kerala, India</p>
					<p>Consultation on Thursday, Friday & Saturday only</p>
					<p>Timings - 1 PM - 8 PM</p>
				</div>
			</div>

			<div class="col-lg-4 col-12 text-center">
				<div class="info-box">
					<i class="fas fa-map-marker"></i>
					<h4>Angamaly Camp</h4>
					<p>Medical camp in Angamaly, For details call +918848511462</p>
				</div>
			</div>
			<div class="col-lg-4 col-12 text-center">
				<div class="info-box">
					<i class="fas fa-map-marker"></i>
					<h4>Alappuzha Camp</h4>
					<p>Medical camp in Alappuzha, For details call +918848511462</p>
				</div>
			</div>
			<div class="col-lg-4 col-12 text-center">
				<div class="info-box">
					<i class="fas fa-map-marker"></i>
					<h4>Tele/ Video / Online Consultation Available</h4>
					<p>You&#39;re in the right place, From anywhere in the world</p>
				</div>
			</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- End Contact list Menu -->
<!-- Start Happy patients counter Menu -->
<section id="" class="section-padding" style="background-color:#273037;margin-top:40px;padding-top:40px;padding-bottom:40px;font-size:22px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="medica-cool-facts-area">
					<div class="row">
						<!-- Single Cool Fact-->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="single-cool-fact-area text-center mb-100">
								<h2><span class="counter">55458</span></h2>
								<h6>Happy Patients</h6>
							</div>
						</div>
						<!-- Single Cool Fact-->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="single-cool-fact-area text-center mb-100">
								<h2><span class="counter">12</span></h2>
								<h6>Doctors & Staffs</h6>
							</div>
						</div>
						<!-- Single Cool Fact-->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="single-cool-fact-area text-center mb-100">
								<h2><span class="counter">60</span></h2>
								<h6>Years With You</h6>
							</div>
						</div>
						<!-- Single Cool Fact-->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="single-cool-fact-area text-center mb-100">
								<h2><span class="counter">5</span></h2>
								<h6>Clinics</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Happy patients counter Menu -->


<!-- Start: Testimonial
    ============================= -->

<section id="testimonial" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="testimonial-carousel text-center">
					<div class="single-testimonial">
						<p>“My husband's premature ejaculation issue has spread darkness in my relationship. We visited many clinics, did various treatments but, now I have realized that we could have been in Dr Rana's Medical Hall a bit earlier. Doctors have also recommended various exercises for relief.”</p>
					</div>
					<div class="single-testimonial">
						<p>“It all started when an issue was raised in my relationship regarding the inability to keep the intercourse. Gradually, my relationship started shrinking and the solution to the problem came after visiting RMH through which there was a sudden positive twist in my relationship.”</p>
					</div>
					<div class="single-testimonial">
						<p>“Ours was quite a complicated issue to solve and have approached many infertility centres in Kochi, but RMH was the one which precisely diagnosed and
							showed us the correct treatment methodology.”</p>
					</div>

					<div class="single-testimonial">
						<p>“Doctors in the clinic are approachable, friendly and of understanding nature.They would reply to our queries with patience without any hesitation to talk during the consultation. We are lucky to find Dr Rana's Medical Hall for our infertility problem.”</p>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>
<!-- End testimonial Menu -->


</main>
<?php get_footer(); ?>