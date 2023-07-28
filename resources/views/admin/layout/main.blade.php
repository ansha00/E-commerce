<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        h1 {
            text-align: center;
        }

        .container {
            width: 850px;
            margin: auto;
            padding: 16px;
            border: 1px solid;
            border-radius: 5px;
        }

        .container-0 {
            margin-top: 30px;
        }
    </style>

</head>

<body>

    <div class="container-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="margin-left:100px; font-size: 25px;" href="/category" >Cateogry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:100px; font-size: 25px;" href="/product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:100px; font-size: 25px;" href="/order#">Order</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
      <!-- changes -->

      @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>