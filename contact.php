<?php
    $title = "Contact Us || Impex Web Solutions";
    include 'header.php';
?>
		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs sec-color">
                <div class="breadcrumbs-image">
                    <img src="images/breadcrumbs/contact2.jpg" alt="Breadcrumbs Image">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">Contact Us</h1>
                                <ul class="breadcrumbs-subtitle">
                                    <li><a href="index.php"><i class="fa fa-home"></i>  Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <!-- Breadcrumbs End -->

            

            <!-- Contact Start -->
            <section id="rs-contact" class="rs-contact contact-section gray-color pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-sm-30 text-center">
                            <div class="email">
                                <i class="fa fa-envelope"></i>
                                <h4>Mail</h4>
                                <p><a href="mailto: contact@impexwebsolutions.com">contact@impexwebsolutions.com</a></p>
                            </div>
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone</h4>
                                <p><a href="tel: +x-xxx-xxx-xxxx">+x-xxx-xxx-xxxx</a></p>
                            </div>
                            <div class="address">
                                <i class="fa fa-map-marker"></i>
                                <h4>Address</h4>
                                <p>23 Janki Tower,<br>Tagore Hill Road,<br>Morabadi, Ranchi 834008 <br>Jharkhand India</p>
                            </div>                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="contact-form">
                                <div id="form-messages"></div>
                                <form method="post" action="mailsend.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <input type="text" placeholder="Name" id="name" name="name" required>
                                            </div>                              
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <input type="text" placeholder="Phone Number" id="phone_number" name="phone_number" required>
                                            </div>                             
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-field">
                                                <input type="email" placeholder="E-Mail" id="email" name="email" required>
                                            </div>                              
                                        </div>
                                    </div>                        
                                    <div class="form-field">
                                        <textarea placeholder="Your Message Here" rows="2" id="message" name="message" required></textarea>
                                    </div>

                                    <div class="form-field">
                                        <textarea placeholder="Your Address Here" rows="3" id="message" name="address" required></textarea>
                                    </div>
                                    <div class="form-button text-left">
                                        <button type="submit" class="readon">Submit Now</button>
                                    </div>
                                </form>
                            </div> 
                        </div>            
                    </div>
                </div>
            </section>
            <!-- Contact End -->                     
        </div> 
        
        <?php
            include 'footer.php';
        ?>