
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
                            <h3><i class="fa fa-list-alt"></i> Tables</h3>
                        </div>
                        <div style="overflow: auto; width: 100%; height:550px; padding: 0px">
                            <div class="tab" align="center">
                                <button class="tablinks" onclick="menu(event, 'orders')" id="defaultOpen">&nbsp;&nbsp; Orders &nbsp;&nbsp;</button>
                                <button class="tablinks" onclick="menu(event, 'reservations')">Reserva...</button>
                            </div>
                            <div id="orders" class="tabcontent" style="overflow-x: hidden">
                                <div class="col-12 col-lg-12 mt-30">
                                    <div class="row">
                                        <table width="100%">
                                            <tr>
                                                <th>NAME</th>
                                                <th>QUANTITY</th>
                                                <th>PRICE</th>
                                                <th>TOTAL</th>
                                            </tr>
                                            <?php
                                                foreach($orders as $order)
                                                {
                                                    echo $order->particulars;
                                            ?>
                                                <tr class="border-t-b">
                                                    <td>Total: Php <?php echo round($order->total,2); ?></td>
                                                    <td>Pay: Php <?php echo round($order->pay,2); ?></td>
                                                    <td>Change: Php <?php echo round($order->change,2); ?></td>
                                                    <td class="pb-10">
                                                        <a href="<?php echo base_url(); ?>admin/deleteOrder?id=<?php echo $order->id; ?>" style="font-size: 14px;"><button class="bg-danger btn-xs" type="button" onclick="return confirm('Are you sure to Delete Order?')"><i class="fa fa-trash"></i>&nbsp;Delete</button></a>
                                                    </td>
                                                </tr>
                                             <?php   
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="reservations" class="tabcontent" style="overflow-x: hidden">
                                <div class="col-12 col-lg-12 mt-30">
                                    <div class="row">
                                        <table width="100%">
                                            <tr>
                                                <th>NAME</th>
                                                <th>QUANTITY</th>
                                                <th>PRICE</th>
                                                <th>TOTAL</th>
                                            </tr>
                                            <?php
                                                foreach($reservations as $reservation)
                                                {
                                                    echo $reservation->particulars;
                                            ?>
                                                <tr>
                                                    <td>Total: Php <?php echo round($reservation->total,2); ?></td>
                                                    <td>Pay: Php <?php echo round($reservation->pay,2); ?></td>
                                                    <td>Change: Php <?php echo round($reservation->change,2); ?></td>
                                                    <td class="pb-10">
                                                        <a href="<?php echo base_url(); ?>admin/deleteOrder?id=<?php echo $reservation->id; ?>" style="font-size: 14px;"><button class="bg-danger btn-xs" type="button" onclick="return confirm('Are you sure to Delete Order?')"><i class="fa fa-trash"></i>&nbsp;Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr class="border-t-b">
                                                    <td>Reserve Date: <?php echo $reservation->reserve_date; ?></td>
                                                    <td>Reserve Time: <?php echo $reservation->reserve_time; ?></td>
                                                    <td> </td>
                                                    <td class="pb-10">
                                                        <a href="<?php echo base_url(); ?>admin/changeStatus?id=<?php echo $reservation->id; ?>" style="font-size: 14px;"><button class="bg-primary btn-xs" type="button" onclick="return confirm('Claim Order?')" style="display: <?php echo $reservation->status; ?>"><i class="fa fa-calendar-check-o"></i>&nbsp;Claim</button></a>
                                                    </td>
                                                </tr>
                                             <?php   
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>

</html>