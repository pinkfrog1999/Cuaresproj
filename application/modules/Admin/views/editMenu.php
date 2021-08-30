
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
                            <h3><i class="fa fa-edit"></i> Edit</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-6 boardeer">
                                <form action="<?php echo base_url(); ?>admin/update" method="post">
                                    <div class="row mt-30">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control mb-10 text-black" name="name" value="<?php echo $menu->name; ?>">
                                                <input type="hidden" name="id" value="<?php echo $menu->id; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" class="form-control mb-10 text-black text-right" name="price" value="<?php echo $menu->price; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-30">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control text-black" name="category">
                                                    <option hidden selected><?php echo $menu->category; ?></option>
                                                    <option>Dessert</option>
                                                    <option>Meal</option>
                                                    <option>Snacks</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-30">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button class="btn-primary mt-10" style="float: right; cursor: pointer;">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>

</html>