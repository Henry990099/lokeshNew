<?php include('controller/config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8" />
        <title>Web Gravita | Payment Form (Stripe)</title>
        <meta name="description" content="Creative Agency, Marketing Agency Template" />
        <meta name="keywords" content="Creative Agency, Marketing Agency" />
        <meta name="author" content="rajesh-doot" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--website-favicon-->
        <link href="assets/images/favicon.png" rel="icon" />
        <!--plugin-css-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/plugin.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <!-- template-style-->
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/responsive.css" rel="stylesheet" />
        <link href="assets/css/darkmode.css" rel="stylesheet" />
    </head>
    <body>
    	
        <!--Start Header -->
        <?php include("include/header.php"); ?>
        <!--End Header -->

        <!--Start sidebar -->
        <?php include("include/sidebar.php"); ?>
        <!--End sidebar -->

        <!--Breadcrumb Area-->
        <section class="breadcrumb-area banner-6">
            <div class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 v-center">
                            <div class="bread-inner">
                                <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                    <h2>Payment Form</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Breadcrumb Area-->

    <?php
        
        $msg_for = '';
        $ed_inv = isset($_GET['wg_inv']) ? $_GET['wg_inv']:'';
        $lcg = isset($_GET['lcg']) ? $_GET['lcg']:'';
        $custom = 1;

        if ($ed_inv != '' && $lcg != '') {

            $lcc = explode('-', $lcg);
            $lcc_id = isset($lcc[1]) ? $lcc[1]:0;

            $sql_lead = "SELECT * FROM order_links WHERE invoice_no='".$ed_inv."' AND id=".$lcc_id;
            $result = $conn->query($sql_lead);

            if ($result->num_rows > 0) {
            
                $row = $result->fetch_assoc();
                $leads_id = $row['id'];

                if ($row['package_id'] != 0) {
                    $sql_package_get = "SELECT * FROM packages WHERE package_id=".$row['package_id'];
                    $result_package = $conn->query($sql_package_get);
                    $row_package = $result_package->fetch_assoc();
                    $package_name = $row_package['package_name'];
                } 

            } else {
                $msg_for = 'Something went wrong! please try again.';
            }

        } else {
            $msg_for = 'Something went wrong! please try again.';
        }

        $conn->close();

        if ($msg_for == '') {
    ?>

    <section class="why-choos-lg pad-tb deep-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                    <div class="form-block">
                        <form data-bs-toggle="validator" class="shake" action="generate_link.php" method="POST">
                      
                                <div class="form-group">
                                    <input type="text" name="cust_name" value="<?php echo $row['customer_name']; ?>" placeholder="Customer Name" readonly/>
                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="Invoice #" name="invoice" value="<?php echo $row['invoice_no']; ?>" readonly/>
                                </div>

                                <div class="form-group">
                                    <input type="email" placeholder="Customer Email" name="cust_email" value="<?php echo $row['customer_email']; ?>" readonly/>
                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="Package Name" name="package_name" value="<?php echo $package_name; ?>" readonly/>
                                </div>

                                <div class="form-group">
                                    <textarea rows="5" name="description" readonly placeholder="Package Description" required><?php echo $row['package_name']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <input  type="text" class="form-control" name="payment" value="<?php echo $row['price']; ?> USD" placeholder="Price" readonly />
                                    <input  type="hidden" class="form-control" name="is_payment_form" value="paymentform" />
                                </div>

                            <div class="col-xs-12 col-md-12 col-lg-3">
                                <?php 
                                    $error = isset($_REQUEST['error_msg']) ? $_REQUEST['error_msg'] :'';
                                    if ($error) { ?> 
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $error; ?>
                                        </div>
                                <?php }
                                    $current_price=$row['price'];
                                    $getprice = ($current_price*100);
                                ?>
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div data-tilt="" data-tilt-max="5" data-tilt-speed="1000" class="single-image wow fadeIn" data-wow-duration="2s"><img src="assets/images/checkout.PNG" alt="image" class="img-fluid"></div>
                        <button type="button" id="checkout-button" class="btn-main bg-btn3 lnk mt20" style="width:83%">Pay Now <span class="circle"></span></button>
                    </div>
                </div>
            </div>
        </section>

    <script src="https://js.stripe.com/v3/"></script>

    <?php 
        require('controller/stripe-php-master/init.php');
        \Stripe\Stripe::setApiKey('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');
        $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => $package_name,
                'images' => ["https://webgravita.com/assets/images/white-logo.png"],
            ],
            'unit_amount' => $getprice,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://webgravita.com/thankyou.php?session_id={CHECKOUT_SESSION_ID}&inv='.$ed_inv.'&lcg='.$lcg.'',
        'cancel_url' => 'https://example.com/cancel',
        ]);
    ?>

    <script>
        var checkoutButton = document.getElementById('checkout-button');

        checkoutButton.addEventListener('click', function() {

            var stripe = Stripe("pk_live_51In945H66o7jdVphJ01MKbEnJq4jyikZTjC3971thFFaT0PvIbQRvq2lruHUvtx2QBb0li1RSMQ82BN1albsVBgh00Y5omE7e8");
            var sessionid = "<?php echo $session['id'] ?>";
                
            stripe.redirectToCheckout({ sessionId: sessionid })
            .then(function (result) {
                if (result.error) {
                alert(result.error.message);
                }
            })
            .catch(function (error) {
                console.error("Error:", error);
            });

        });
    </script>

    <?php } else {?>
        <br><br><br><br>
        <center><h1>Something Went Wrong!</h1></center>
        <br><br><br><br>
    <?php } ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
        <!--Start Footer-->
    <?php include("include/footer.php"); ?>
    <!--End Footer-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/validator.min.js"></script>
    <script src="assets/js/form.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugin.min.js"></script>
    <script src="assets/js/dark-mode.js"></script>
    <!--common script file-->
    <script src="assets/js/main.js"></script>
    
    </body>
</html>
