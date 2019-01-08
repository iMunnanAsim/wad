<?php require "C:/xampp/htdocs/wad/pro/server/function.php" ;
if(isset($_GET['insert_brand']))
{
    $pro_title = $_GET['brand_title'];

    $Query = "insert into brand (Title)
    values ('$pro_title')";
    echo $Query;
    $Result = mysqli_query($DB,$Query);
    if(!$Result)
    {
        echo "Not exe";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Product</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12 text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-md-inline"> Add New </span> Brand </h1>
    <form method="get">
        <div class="row my-3">
            <div class="">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Brand </span> Title: </label>
            </div>

            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <textarea class="form-control" type="file" id="pro_desc" name="brand_title" placeholder="Enter Brand Title"></textarea>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class=""></div>
            <div class="">
                <button type="submit" name="insert_brand" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>