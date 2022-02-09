<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ASSETS?>/bootstrap5/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="page-wrap d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <span class="display-1 d-block">404</span>
                    <!-- <?=$msg?> -->
                    <div class="mb-4 lead">The page you are looking for was not found.</div>
                    <a href="<?= HOSTNAME ?>/home" class="btn btn-link">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>