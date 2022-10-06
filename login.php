<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/b7ccdde283.js" crossorigin="anonymous"></script>
</head>

<body>
    <form action="<?php get_template_directory_uri() . "/db/login.php" ?>" method="post">

        <div class="row justify-content-center">

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">

                      
                        <div class="form-group pb-2">
                            <input class="form-control" type="email" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group pb-2">
                            <input class="form-control" type="password" name="password" placeholder="Enter Your Password">
                        </div>
                        <div class="form-group pb-2">
                            <input class="px-3 py-1 bg-primary border border-white rounded-pill text-white" name="submit" type="submit">
                        </div>

                    </div>
                </div>
            </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>