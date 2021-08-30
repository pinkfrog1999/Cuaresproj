
<!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="<?php echo base_url(); ?>assets/img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->
    
<!-- ***** Students Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-12">
                    <div class="uza-contact-form mb-80 mt-30">
                        <div class="contact-heading mb-10 text-center">
                            <h3>Menu</h3>
                        </div>
                        <div style="overflow: auto; width: 100%; height:550px; padding: 0px">
                            <div class="tab" align="center">
                                <button class="tablinks" onclick="menu(event, 'meal')" id="defaultOpen">&nbsp;&nbsp; Meal &nbsp;&nbsp;</button>
                                <button class="tablinks" onclick="menu(event, 'snacks')">Snacks</button>
                                <button class="tablinks" onclick="menu(event, 'dessert')">Dessert</button>
                            </div>
                            <form method="post" action="<?php echo base_url(); ?>users/order">
                                <div id="meal" class="tabcontent" style="overflow-x: hidden">
                                    <div class="col-12 col-lg-12 mt-30">
                                        <div class="row">
                                            <?php
                                                foreach($meal as $m)
                                                {
                                            ?>
                                                <div class="col-lg-1">
                                                    <div class="form-group">
                                                        <img src="<?php echo base_url(); ?>assets/foods/<?php echo $m->code.$m->ext; ?>" class="img-menu">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <h5 class="mb-10"><?php echo $m->name; ?></h5>
                                                        <h6 class="primary mb-10">Php <?php echo $m->price; ?></h6>
                                                        <div style="width: 100%; height: 30px; vertical-align: middle;">
                                                            <input type="hidden" name="id<?php echo $m->id; ?>" value="<?php echo $m->id; ?>">
                                                            <input type="hidden" name="price<?php echo $m->id; ?>" value="<?php echo $m->price; ?>">
                                                            <label>Quantity:&nbsp;<input type="number" name="<?php echo $m->id; ?>" style="width: 50px" placeholder="0" min="0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="snacks" class="tabcontent">
                                    <div class="col-12 col-lg-12 mt-30">
                                        <div class="row">
                                            <?php
                                                foreach($snacks as $s)
                                                {
                                            ?>
                                                <div class="col-lg-1">
                                                    <div class="form-group">
                                                        <img src="<?php echo base_url(); ?>assets/foods/<?php echo $s->code.$s->ext; ?>" class="img-menu">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <h5 class="mb-10"><?php echo $s->name; ?></h5>
                                                        <h6 class="primary mb-10">Php <?php echo $s->price; ?></h6>
                                                        <div style="width: 100%; height: 30px; vertical-align: middle;">
                                                            <input type="hidden" name="id<?php echo $s->id; ?>" value="<?php echo $s->id; ?>">
                                                            <input type="hidden" name="price<?php echo $s->id; ?>" value="<?php echo $s->price; ?>">
                                                            <label>Quantity:&nbsp;<input type="number" name="<?php echo $s->id; ?>" style="width: 50px" placeholder="0" min="0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="dessert" class="tabcontent">
                                    <div class="col-12 col-lg-12 mt-30">
                                        <div class="row">
                                            <?php
                                                foreach($desserts as $d)
                                                {
                                            ?>
                                                <div class="col-lg-1">
                                                    <div class="form-group">
                                                        <img src="<?php echo base_url(); ?>assets/foods/<?php echo $d->code.$d->ext; ?>" class="img-menu">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <h5 class="mb-10"><?php echo $d->name; ?></h5>
                                                        <h6 class="primary mb-10">Php <?php echo $d->price; ?></h6>
                                                        <div style="width: 100%; height: 30px; vertical-align: middle;">
                                                            <input type="hidden" name="id<?php echo $d->id; ?>" value="<?php echo $d->id; ?>">
                                                            <input type="hidden" name="price<?php echo $d->id; ?>" value="<?php echo $d->price; ?>">
                                                            <label>Quantity:&nbsp;<input type="number" name="<?php echo $d->id; ?>" style="width: 50px" placeholder="0" min="0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-11 text-right">
                                                <label style="cursor: pointer;"><input type="radio" name="option" class="chk mt-10" value="order" checked> Order</label>&emsp;
                                                <label style="cursor: pointer;"><input type="radio" name="option" class="chk mt-10" value="reservation"> Reservation</label>
                                            </div>
                                            <div class="col-lg-1">
                                                <button class="btn-primary mt-10" style="float: right; cursor: pointer;">Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>

</html>