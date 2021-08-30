
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
                            <h3><i class="fa fa-money"></i> Pay-up</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-6 boardeer">
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                    <?php
                                        echo  $this->nativesession->get("orders");
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="border-top: 1px dotted gray">Php <?php echo  $this->nativesession->get("total"); ?></td>
                                    </tr>
                                </table>
                                <form action="<?php echo base_url(); ?>users/done" method="post">
                                    <div class="row mt-30">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Payment</label>
                                                <input type="text" class="form-control mb-10 text-black text-right" name="amount" id="amount" placeholder="Amount" onkeypress="filter(event);" onkeyup="changes();" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Change</label>
                                                <input type="text" class="form-control mb-10 text-black text-right" name="change" id="change" placeholder="0.0" onkeypress="filterAll(event);">
                                                <input type="hidden" name="total" id="total" value="<?php echo  $this->nativesession->get('total'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        if($this->nativesession->get('option') == 'reservation')
                                        {
                                    ?>
                                        <div class="row mt-30">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Reserve Date</label>
                                                    <input type="date" class="form-control mb-10 text-black" name="date">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Reserve Time</label>
                                                    <input type="time" class="form-control mb-10 text-black" name="time">
                                                </div>
                                            </div>
                                        </div>
                                    <?php 
                                        }
                                    ?>
                                    <div class="row mt-30">
                                        <div class="col-lg-8">
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <button class="btn-primary mt-10" style="float: right; cursor: pointer;">Done</button>
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