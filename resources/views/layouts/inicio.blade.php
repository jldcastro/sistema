<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sistema Calibración</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        {!!Html::style('css/bootstrap.min.css')!!}
        <!-- Font Awesome -->
        {!!Html::style('css/font-awesome.min.css')!!}
        <!-- Ionicons -->
        {!!Html::style('css/pe-icon-7-stroke.css')!!}
        <!-- Theme style -->
        <link rel="stylesheet" href="css/AdminLTE.min.css">
        <link rel="stylesheet" href="css/skins/_all-skins.min.css">
        <!-- Logo Empresa en la pestaña del navegador -->
        <link href='imagenes/empresa/molinstec.ico' rel='shortcut icon' type='image/x-icon'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


        <![endif]-->
    </head>
    @yield('contenido')
        <!-- jQuery 2.1.4 -->
        {!!Html::script('js/jQuery-2.1.4.min.js')!!}
        <!-- Bootstrap 3.3.5 -->
        {!!Html::script('js/bootstrap.min.js')!!}

        @yield('scripts')
    </body>
</html>