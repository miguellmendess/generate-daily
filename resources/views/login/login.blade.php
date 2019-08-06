<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">

        <div class="title m-b-md">
            Login
        </div>
        <div class="row">
            <div class="col-md-12 content-daily" style="height: auto!important;">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">
                            Acessar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
