<?php

ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);
error_reporting(-1);

require "../vendor/autoload.php";

$brandCountries = new App\BrandCountry;

$brandCountries = $brandCountries->getAllBrandCountries();

if (isset($_POST['submit'])) {
    $car = new App\Car;
    $car->insert();
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .table-bordered td, .table-bordered th, .table-bordered thead th{
            border: 1px solid black;
        }
        table th {
            background-color: #e5e5e5;
        }
    </style>
    <title>Neurony Solutions</title>
</head>
<body>

<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" name="brand">
            </div>
            <div class="form-group col-md-6">
                <label for="model">Model:</label>
                <input type="text" class="form-control" name="model">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="seats">Seats:</label>
                <input type="text" class="form-control" name="seats">
            </div>
            <div class="form-group col-md-6">
                <label for="color">Color:</label>
                <input type="text" class="form-control" name="color">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="year">Year:</label>
                <input type="text" class="form-control" name="year">
            </div>
            <div class="form-group col-md-6">
                <label for="brand-country">Brand Country:</label>
                <select class="form-control" name="brand-country-id">
                    <?php foreach ($brandCountries as $brandCountry) { ?>
                        <option value="<?=$brandCountry['id']?>"><?=$brandCountry['brand_country']?></option>
                    <?php }?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>