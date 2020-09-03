<?php
$user_details = $this->db->get_where('user', array('id' => $purchase_history['user_id']))->row_array();
$package_details = $this->db->get_where('package', array('id' => $purchase_history['package_id']))->row_array();
$settings=App\Setting::all()->keyBy('type');
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-body">
                <div class="invoice">

                    <div class="row">

                        <div class="col-sm-6 invoice-left">

                            <a href="#">
                                <img src="<?php echo asset('global/dark_logo.png'); ?>" height="30"/>
                            </a>

                        </div>

                        <div class="col-sm-6 invoice-right">

                            <h3>Invoice</h3>
                            <span><b>Printed on</b> : <?php echo date('D, d/M/Y'); ?></span>
                        </div>

                    </div>


                    <hr class="margin" />


                    <div class="row">

                        <div class="col-sm-3 invoice-left">

                            <h4>Billing to</h4>
                            <?php echo $user_details['name']; ?><br>
                            <?php echo $user_details['address']; ?><br>
                            <?php echo $user_details['phone']; ?><br>

                        </div>

                        <div class="col-sm-3 invoice-left">

                            <h4><?php echo get_phrase('billing_from'); ?></h4>
                            <?php echo $settings['website_title']->description; ?><br>
                            <?php echo $settings['address']->description; ?><br>
                            <?php echo $settings['phone']->description; ?><br>
                        </div>

                        <div class="col-md-6 invoice-right">

                            <h4>Payment details:</h4>
                            <strong>Purchase date:</strong> <?php echo date('D, d-M-Y', $purchase_history['purchase_date']); ?>
                            <br />
                            <strong>Purchase status:</strong> <span class="label label-success float-right"><?php echo get_phrase('paid'); ?></span>
                            <br />
                            <strong>Order id no:</strong> <span class="float-right"><?php echo sprintf('%07d', $purchase_history['id']); ?></span>

                        </div>

                    </div>

                    <div class="margin"></div>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Package name</th>
                            <th>Expired date</th>
                            <th>Cost</th>
                            <th class="text-right">Total</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <b><?php echo $package_details['name']; ?></b> <br/>
                            </td>
                            <td><?php echo date('D, d-M-Y', $purchase_history['expired_date']); ?></td>
                            <td><?php echo $settings['system_currency']->description.' '.($purchase_history['amount_paid']); ?></td>
                            <td class="text-right"><?php echo $settings['system_currency']->description.''.($purchase_history['amount_paid']); ?></td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="margin"></div>

                    <div class="row">

                        <div class="col-sm-6">

                        </div>

                        <div class="col-sm-6">

                            <div class="invoice-right">

                                <ul class="list-unstyled">
                                    <li>
                                        Sub total amount:
                                        <strong><?php echo $settings['system_currency']->description." ".($purchase_history['amount_paid']); ?></strong>
                                    </li>
                                    <li>
                                      Grand total:
                                        <strong><?php echo $settings['system_currency']->description." ".($purchase_history['amount_paid']); ?></strong>
                                    </li>
                                </ul>

                                <br />

                                <a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
                                    Print invoice
                                    <i class="entypo-doc-text"></i>
                                </a>
                                &nbsp;
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div><!-- end col-->
</div>
