<?php
require "db_connection.php";

function Category()
{

    global $DB;
    $Query = "select* from categories";
    $Result = mysqli_query($DB,$Query);
    while ($Row = mysqli_fetch_assoc($Result))
    {

       echo "<li><a class = 'nav-link' href = '#'>$Row[Title]</a></li>";
    }
}
function Category2()
{

    global $DB;
    $Query = "select* from categories";
    $Result = mysqli_query($DB,$Query);
    while ($Row = mysqli_fetch_assoc($Result))
    {

        echo "<option>$Row[Title]</option>";
    }
}

function Brands()
{

    global $DB;
    $Query = "select* from brand";
    $Result = mysqli_query($DB,$Query);
    while ($Row = mysqli_fetch_assoc($Result))
    {

        echo "<li><a class = 'nav-link' href = '#'>$Row[Title]</a></li>";
    }
}

function Brands2()
{

    global $DB;
    $Query = "select* from brand";
    $Result = mysqli_query($DB,$Query);
    while ($Row = mysqli_fetch_assoc($Result))
    {

        echo "<option>$Row[Title]</option>";
    }
}
function getPro(){
    global $DB;
    $getProQuery = "select * from products order by RAND();";
    $getProResult = mysqli_query($DB,$getProQuery);
    while($row = mysqli_fetch_assoc($getProResult)){
        $pro_id = $row['pro_id'];
        $pro_title = $row['pro_title'];
        $pro_price = $row['pro_price'];
        $pro_image = $row['pro_image'];
        echo "
                <div class='col-sm-6 col-md-4 col-lg-3 text-center product-summary'>
                    <h5 class='text-capitalize'>$pro_title</h5>
                    <img src='admin/product_images/$pro_image'>
                    <p> <b> Rs $pro_price/-  </b> </p>
                    <a href='detail.php' class='btn btn-info btn-sm'>Details</a>
                    <a href='#'>
                        <button class='btn btn-primary btn-sm'>
                            <i class='fas fa-cart-plus'></i> Add to Cart
                        </button>
                    </a>
                </div>
        ";
    }
}