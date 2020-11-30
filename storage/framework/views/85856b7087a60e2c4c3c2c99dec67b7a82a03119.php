<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" >

    <title>Hello, world!</title>
  </head>

  <style>
.bg-pink{
  background-color: palevioletred;
}

body{
  background-color: pink;

}

.flex-middle{
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 400px;
}

.mid{
  text-align: center;
}

.flex{
  display: flex;
}
</style>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-pink">

    <a class="navbar-brand" href="#">Flowelto Shop</a>

    <div class="collapse navbar-collapse right" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

            <a class="nav-link" href="#">Login</a>
            <a class="nav-link" href="#">Register</a>
            <a class="nav-link" href="#">Sat, 16 may 2020</a>

        </div>
    </div>
    </nav>

    <?php echo $__env->yieldContent('container'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

<?php /**PATH C:\xampp\htdocs\learning\resources\views//welcome.blade.php ENDPATH**/ ?>