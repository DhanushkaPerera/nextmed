<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/9/2017
 * Time: 2:44 PM
 */

?>
<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<div class="row header">


    <div class="col-sm-12">
        <div class="well">
            <h2>Customer Details</h2>
            <p>Invoice <strong>#90-98792</strong></p>
            <p>March 30, 2013</p>
            <p>Account Name: BootstrapMaster.com</p>
            <p><strong>SWIFT code: 99 8888 7777 6666 5555</strong></p>
        </div>
    </div><!--/col-->

</div><!--/row-->
<table class="table table-striped table-responsive">
    <thead>
    <tr>
        <th class="center">#</th>
        <th>Item</th>
        <th>Description</th>
        <th class="center">Quantity</th>
        <th class="right">Unit Cost</th>
        <th class="right">Total</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="center">1</td>
        <td class="left">Genius License</td>
        <td class="left">Extended License</td>
        <td class="center">1</td>
        <td class="right">$999,00</td>
        <td class="right">$999,00</td>
    </tr>
    <tr>
        <td class="center">2</td>
        <td class="left">Custom Services</td>
        <td class="left">Instalation and Customization (cost per hour)</td>
        <td class="center">20</td>
        <td class="right">$150,00</td>
        <td class="right">$3.000,00</td>
    </tr>
    <tr>
        <td class="center">3</td>
        <td class="left">Hosting</td>
        <td class="left">1 year subcription</td>
        <td class="center">1</td>
        <td class="right">$499,00</td>
        <td class="right">$499,00</td>
    </tr>
    <tr>
        <td class="center">4</td>
        <td class="left">Platinum Support</td>
        <td class="left">1 year subcription 24/7</td>
        <td class="center">1</td>
        <td class="right">$3.999,00</td>
        <td class="right">$3.999,00</td>
    </tr>
    </tbody>
</table>

<div class="row">

    <div class="col-lg-4 col-sm-5 notice">
        <div class="well">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
    </div><!--/col-->

    <div class="col-lg-4 col-lg-offset-4 col-sm-5 col-sm-offset-2 recap">
        <table class="table table-clear">
            <tbody>
            <tr>
                <td class="left"><strong>Subtotal</strong></td>
                <td class="right">$8.497,00</td>
            </tr>
            <tr>
                <td class="left"><strong>Discount (20%)</strong></td>
                <td class="right">$1,699,40</td>
            </tr>
            <tr>
                <td class="left"><strong>VAT (10%)</strong></td>
                <td class="right">$679,76</td>
            </tr>
            <tr>
                <td class="left"><strong>Total</strong></td>
                <td class="right"><strong>$7.477,36</strong></td>
            </tr>
            </tbody>
        </table>
        <a href="page-invoice.html#" class="btn btn-info" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</a>
        <a href="page-invoice.html#" class="btn btn-success"><i class="fa fa-usd"></i> Proceed to Payment</a>
    </div><!--/col-->

</div><!--/row-->