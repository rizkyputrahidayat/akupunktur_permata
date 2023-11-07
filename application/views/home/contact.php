<!-- ======= Contact Section ======= -->
<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <br>
                        <h2>CONTACT US</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start contact icon column -->
                <div class="col-md-4">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="bi bi-phone"></i>
                            <p>
                                Telp: +62  812-1021-1189<br>
                                <span>Setiap Hari (08.00-21.00) WIB</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="bi bi-envelope"></i>
                            <p>
                                Email: akupunturpermata@gmail.com<br>
                                <span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="bi bi-geo-alt"></i>
                            <p>
                                <span>Jl. Raya Kby. Lama No.101, RW.10, Grogol Utara, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12210</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Google Map -->
                <div class="col-md-6">
                    <!-- Start Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5609.318304334167!2d106.77738316393268!3d-6.212581836961015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7942b54a85d%3A0x950e8ada7f1416a1!2sGriya%20Akupuntur%20Permata!5e0!3m2!1sid!2sid!4v1680509017617!5m2!1sid!2sid" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- End Map -->
                </div>
                <!-- End Google Map -->

                <!-- Start  contact -->
                <div class="col-md-6">
                    <div class="form contact-form">
                        <!-- </?= form_open() ?> -->
                        <form action="Home/SendMail" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                        <!-- </?= form_close() -->
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div><!-- End Contact Section -->