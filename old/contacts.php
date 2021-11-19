<?php require_once("header.php"); ?>
<?php $headOfficeDetails = get_head_office_details() ?>
<!-- end .header-->
<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-3">
                    <div class="b-title-page__wrap">
                        <h1 class="b-title-page">Contact us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Get In Touch</li>
                            </ol>
                            <!-- end breadcrumb-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end .b-title-page-->
<main class="l-main-content">
    <div class="container">
        <div class="section-area">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4">
                    <div class="b-contacts"><i class="ic icon-direction"></i>
                        <div class="b-contacts__title">Head Office</div>
                        <div class="b-contacts__info"><?php echo($headOfficeDetails['address']) ?></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="b-contacts"><i class="ic icon-call-end bg-primary"></i>
                        <div class="b-contacts__title">Phone</div>
                        <div class="b-contacts__info"><a href="tel:#"><?php echo($headOfficeDetails['first_phone_no']) ?></a><br><?php echo($headOfficeDetails['second_phone_no']) ?></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="b-contacts"><i class="ic icon-envelope"></i>
                        <div class="b-contacts__title">Email</div>
                        <div class="b-contacts__info"><?php echo($headOfficeDetails['first_email']) ?><br><?php echo($headOfficeDetails['second_email']) ?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $result = get_branch_list();
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="b-contacts"><i class="ic icon-flag bg-primary"></i>
                                    <div class="b-contacts__title">Showroom</div>
                                    <div class="b-contacts__info"><?php echo($row['email']);?><br><?php echo($row['phone_no']);?><br><?php echo($row['address']);?></div>
                                </div>
                            </div>
                <?php 
                        }
                    }
                ?>
            </div>
            
            <!-- end .b-contacts-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="map" id="map"></div>
            </div>
            <div class="col-md-6">
                <section class="section-form-contacts">
                    <h2 class="ui-title-inner">Send a<span class="text-primary"> Message</span></h2>
                    <p>Nulla pariatur excepteur sint occaecat cupidatat no proident culpa qui officia des mollit anim id est lab orum ut perspiciatis unde omnis iste natuser sit volupta tem accusantium sed ipsum laudantium.</p>
                    <div id="success"></div>
                    <form class="b-form-contacts ui-form" id="contactForm" action="#" method="post">
                        <div class="form-group">
                            <input class="form-control" id="user-name" type="text" name="user-name" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="user-email" type="email" name="user-email" placeholder="email" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="user-message" rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <button class="btn btn-primary">Send Message</button>
                    </form>
                </section>
                <!-- end .b-form-contact-->
            </div>
        </div>
    </div>
</main>
<?php require_once ("footer.php"); ?>