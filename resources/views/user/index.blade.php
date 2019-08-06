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
<div class="position-ref full-height">

    <div class="p-20">
        <div class="content">
        <div class="row">
            <div class="col-md-12 content-daily" style="height: auto!important;">
                <form action="">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="" selected disabled>Selecione um mês</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>

                </form>
            </div>
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
