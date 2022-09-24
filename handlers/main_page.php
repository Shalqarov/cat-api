<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CATS</title>
</head>

<body style="background-color: #e7e6f7;">
<nav style="background-color: #e3d0d8;" class="navbar navbar-expand-lg navbar-light">
    <h2 class="navbar-brand">RANDOM CAT CATEGORIES</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">No category<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/?id=5">In boxes</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/?id=15">In clothes</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/?id=1">With hats</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/?id=14">In sinks</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/?id=2">In space</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/?id=4">With sunglasses</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/?id=7">With ties</a>
            </li>
        </ul>
    </div>
</nav>
<div style="background-color: #fff; max-width: max-content;" class="container pt-2 pb-5 px-auto">
    <img src="<?php echo $data[0]->url ?>" class="img-fluid rounded mx-auto d-block z-depth-4" alt="Responsive image">
    <h2 class="text-center my-1"><?php echo $category ?></h2>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>