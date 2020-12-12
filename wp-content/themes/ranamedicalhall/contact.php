<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<!-- Start: Breadcrumb Area    ============================= -->
<section id="newbreadcrumb" class="newbreadcrumb" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg/breadcrumb-bg.jpg); background-size: cover; background-position: center;height:340px;margin-left:-320px">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">&nbsp;</div>
        </div>
    </div>
</section>
<!-- End: Breadcrumb Area    ============================= -->
<!-- Start: Contact    ============================= -->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">&nbsp;</div>
            <div class="col-lg-8">
                <div class="appointment-content">
                    <h2>Contact Form</h2>
                    <form action="<?php echo get_stylesheet_directory_uri();?>/forms/contactform.php" id="contactform" method="post">

                        <div class="form-group">
                            <label></label>
                            <input class="input__field input__field--hantus" type="text" id="input-01" name="name" onKeyPress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" aria-required="true" aria-invalid="false" placeholder="Name" required />
                        </div>
                        <hr>

                        <!-- <input class="input__field input__field--hantus" type="text" id="input-01" name="name" onKeyPress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" aria-required="true" aria-invalid="false" required/>	<label class="input__label input__label--hantus" for="input-01">		<svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">		<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>		</svg>		<span class="input__label-content input__label-content--hantus">Name</span> </label>
                            </span> -->

                        <div class="form-group">
                            <label></label>
                            <input class="input__field input__field--hantus" type="email" id="input-02" name="email" aria-required="true" aria-invalid="false" required maxlength="50" placeholder="Email">
                        </div>
                        <hr>

                        <!-- <span class="input input--hantus"><input class="input__field input__field--hantus" type="email" id="input-02" name="email" aria-required="true" aria-invalid="false" required maxlength="50" /><label class="input__label input__label--hantus" for="input-02">	<svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">	<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>	</svg>	<span class="input__label-content input__label-content--hantus">Email</span></label>
                            </span> -->

                        <div class="form-group">
                            <label></label>
                            <input class="input__field input__field--hantus" type="text" name="tel" id="input-03" aria-required="true" aria-invalid="false" required onKeyPress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" placeholder="Phone Number/WhatsApp Number" />
                        </div>
                        <hr>

                        <!-- <span class="input input--hantus"><input class="input__field input__field--hantus" type="text" name="tel" id="input-03" aria-required="true" aria-invalid="false" required onKeyPress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"/><label class="input__label input__label--hantus" for="input-03">	<svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">	<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>	</svg>	<span class="input__label-content input__label-content--hantus">Phone Number/WhatsApp Number</span></label>
                            </span> -->

                        <div class="form-group">
                            <label></label>
                            <input class="input__field input__field--hantus" type="text" name="location" id="location" aria-required="true" aria-invalid="false" required placeholder="Location" />
                        </div>
                        <hr>


                        <!--  <span class="input input--hantus"><input class="input__field input__field--hantus" type="text" name="location" id="location" aria-required="true" aria-invalid="false" required /><label class="input__label input__label--hantus" for="location">	<svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">	<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>	</svg>	<span class="input__label-content input__label-content--hantus">Location</span></label>
                            </span> -->

                        <div class="form-group">
                            <label></label>
                            <textarea class="input__field input__field--hantus" id="input-04" name="mesg" aria-required="true" aria-invalid="false" required placeholder="Message" rows=""></textarea>
                        </div>
                        <hr>

                        <!-- <span class="input input--hantus textarea"><textarea class="input__field input__field--hantus" rows="6" id="input-04"  name="mesg"aria-required="true" aria-invalid="false" required></textarea><label class="input__label input__label--hantus" for="input-04"><svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none"><path d="m0,0l404,0l0,77l-404,0l0,-77z"/></svg><span class="input__label-content input__label-content--hantus">Message</span></label>
                            </span> -->

                        <!--<button class="boxed-btn">Send Message</button>-->
                        <div class="g-recaptcha" data-sitekey="6Lfpx90ZAAAAAJgrEVr0ALmZTBO3i2xOgKvSP2Ag"></div>

                        <!-- <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        <input type="hidden" name="action" value="validate_captcha"> -->
                        <input type="submit" value="Send to us" class="submitbanner">
                    </form>
                </div>
            </div>
            <div class="col-lg-2">&nbsp;</div>
            <div class="col-lg-12">
                <section id="beauticians" class="section-padding">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 col-12 text-center">
                                <div class="section-title">
                                    <h2>Meet Us At</h2>
                                    <!--<hr>			
<p>You can meet us at follo</p>-->
                                </div>
                            </div>
                        </div>
                        <div style="margin-left:10px;margin-top: 20px;">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="post-content nomapimage">
                                        <h5><a href="https://g.page/dr--rana-s-medical-hall-kochi?share" target="_blank">Corporate Clinic / Head Office - Ernakulam</a></h5>
                                        <p class="content">DD Building, Second Floor, Opposite Metro Pillar #689,Shenoys Junction, MG Road, Ernakulam / Kochi, Kerala - 682035
                                            <br><br> Monday to Saturday (Timings ) - 11.30 am 7.30 pm
                                            <br>Sunday - 11.30 am - 1.30 pm </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="post-content nomapimage">
                                        <h5><a href="https://g.page/dr--rana-s-medical-hall-kottayam?share" target="_blank">Kottayam Branch </a></h5>
                                        <p class="content">Surya Guest Line, Thirunakkara Temple
                                            <br />Thekkenada (South End)
                                            <br />Near Srirangom Auditorium, Kottayam
                                            <br />Kerala - 686001
                                            <br>
                                            <br> Consultation on Monday to Thursday
                                            <br>Note : Friday (with prior appointment only)
                                            <br> Timing 1 pm - 7.30 pm</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="post-content nomapimage">
                                        <h5><a href="https://g.page/dr--rana-s-medical-hall-thrissur?share" target="_blank">Thrissur Branch </a></h5>
                                        <p class="content">Second floor, P.M.A. Building
                                            <br />Post Office road
                                            <br /> Opposite Cee Pee Tower, Thrissur, Kerala - 680001<br>
                                            <br />Consultation on Thursday, Friday & Saturday only
                                            <br>Timings - 1 PM - 8 PM </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-left:0px;">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-lg-0">
                                    <h5>Ernakulam / Kochi Map</h5>
                                    <div class="single-beauticians">
                                        <div class="img-wrapper">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.498898324805!2d76.28220631434247!3d9.975583992867895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d4d0dc84569%3A0xda5e2dd00b63d85c!2sDr+Rana's+Roy+Medical+Hall!5e0!3m2!1sen!2sin!4v1491978911669" width="600" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                                            <div class="beautician-footer-text">
                                            </div>
                                        </div>
                                        <div class="beautician-content">
                                            <div class="inner-content">
                                                <div class="description">
                                                    <div>
                                                        DD Building, Second Floor, Opposite Metro Pillar #689<br>
                                                        Shenoys Junction, MG Road, Ernakulam / Kochi<br />
                                                        Kerala 682035<br> <br>
                                                        Monday to Saturday (Timings ) - 11.30 am 7.30 pm<br>
                                                        Sunday - 11.30 am - 1.30 pm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-lg-0">
                                    <h5>Kottayam Map</h5><br>
                                    <div class="single-beauticians">
                                        <div class="img-wrapper">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.070565691722!2d76.51634731433882!3d9.589185993133547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b062ba7476704d5%3A0xf563eced283147a4!2sDr+Rana's%2C+Roy+Medical+Hall!5e0!3m2!1sen!2sin!4v1491978942763" width="600" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                                        </div>
                                        <div class="beautician-content">
                                            <div class="inner-content">
                                                <div class="description">
                                                    <div>
                                                        Surya Guest Line, Thirunakkara Temple<br />
                                                        Thekkenada (South End)<br /> Near Srirangom Auditorium, Kottayam <br />
                                                        Kerala 686001<br> <br> Consultation on Monday to Thursday<br>
                                                        Note : Friday (with prior appointment only)<br> Timing 1pm - 7.30 pm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-sm-0">
                                    <h5>Thrissur Map</h5><br>
                                    <div class="single-beauticians">
                                        <div class="img-wrapper">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.762896403065!2d76.21044331434783!3d10.519331992496278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ee48a2cd2f33%3A0xe3681b1263ce9b37!2sDr+Rana's+Roy+Medical+Hall!5e0!3m2!1sen!2sin!4v1491979049536" width="600" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                                        </div>
                                        <div class="beautician-content">
                                            <div class="inner-content">
                                                <div class="description">
                                                    <div>
                                                        Second floor, P.M.A. Building <br />
                                                        Post Office road, Opposite Cee Pee Tower &, Indian Bank<br />
                                                        Thrissur, Kerala 680001 <br />
                                                        Consultation on Thursday, Friday &amp; Saturday only<br>
                                                        Timings - 1 PM - 8 PM</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-left:10px;margin-top: 20px;">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="post-content nomapimage">
                                        <h5><a href="https://g.page/dr--rana-s-medical-hall-angamaly?share" target="_blank">Angamaly</a> </h5>
                                        <p class="content">
                                            Medical camp in Angamaly, For details call +918848511462
                                            <br /> Mundadan's Tower, Room # 117
                                            <br /> Royal Inn Hotel (Aaryas Hotel) Railway station junction
                                            <br /> Ernakulam, Angamaly
                                            <br /> Kerala - 683572
                                            <br /> </p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="post-content nomapimage">
                                        <h5><a href="https://g.page/dr--rana-s-medical-hall-alleppey?share" target="_blank">Alappuzha / Aleppey</a></h5>
                                        <p class="content">Room # 107, Hotel Raiban, Near Medical College
                                            <br /> Municipal Stadium Ward
                                            <br /> Vellakkinar, Alappuzha
                                            <br /> Kerala - 688001<br>
                                            <br /> Every month LAST FRIDAY consultation available
                                            <br /> Timings - 2 pm - 8 PM </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- End: Contact ============================= -->

<?php get_footer(); ?>