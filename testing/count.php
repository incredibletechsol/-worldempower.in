
<?php

include('conn.php');

$fetch_teams="select * from tbl_faculty order by id desc";	

$teams_rs= mysqli_query($con,$fetch_teams);

$totalFranchise =  mysqli_num_rows($teams_rs);

$fetch_customers="select total from tbl_customers order by id desc";	

$customer_rs= mysqli_query($con,$fetch_customers);

$customer_row = mysqli_fetch_array($customer_rs);

$totalCustomers= $customer_row[0];



?>


<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="employees">
                    <p class="counter-count"><?php echo $totalFranchise; ?></p>
                    <p class="employee-p">Franchise</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer">
                    <p class="counter-count"><?php echo $totalCustomers; ?></p>
                    <p class="customer-p">Satisfied Customers</p>
                </div>
            </div>

        </div>
    </div>
</div>

