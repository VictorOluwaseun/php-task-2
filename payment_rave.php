<?php  include_once('lib/header.php');  require_once('functions/alert.php');?>
    <p>
        <?php  print_alert(); ?>
    </p>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4"> Make your payment </h1>
         <form method="POST" action="process_payment.php">
            <p>
                <label>Amount</label><br />
                <input
                
                <?php              
                    if(isset($_SESSION['amount'])){
                        echo "value=" . $_SESSION['amount'];                                                             
                    }                
                ?>
                type="number" class="form-control" name="amount" placeholder="Amount to pay"  />
            </p>

            <p>
                <label>Your First Name</label><br />
                <input 
                  <?php              
                    if(isset($_SESSION['firstName'])){
                        echo "value=" . $_SESSION['firstName'];                                                             
                    }                
                ?>
                class="form-control" type="text" name="firstName" placeholder="Please enter your first name"  />
            </p>       

            <p>
                <label>Your Surname</label><br />
                <input 
                <?php              
                    if(isset($_SESSION['surname'])){
                        echo "value=" . $_SESSION['surname'];                                                             
                    }                
                ?>
                class="form-control" type="text" name="surname" placeholder="Please enter your surname"  />
            </p>       
        <p>
                <label>Email</label><br />
                <input
                
                <?php              
                    if(isset($_SESSION['email'])){
                        echo "value=" . $_SESSION['email'];                                                             
                    }                
                ?>

                type="text" class="form-control" name="email" placeholder="Email"  />
            </p>
        
            <p>
                <button class="btn btn-sm btn-primary" type="submit" name="pay">Pay</button>
            </p>
        </form>
    </div>
</div>
    </div>


<?php include_once('lib/footer.php'); ?>

