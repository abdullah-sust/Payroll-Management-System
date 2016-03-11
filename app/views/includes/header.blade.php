    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keyword" content="">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>{{ $title }} - {{ Config::get('customConfig.names.siteName')}}</title>

        <!-- Bootstrap core CSS -->


        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/bootstrap-reset.css') }}
        {{ HTML::style('fonts/font-awesome/css/font-awesome.css') }}

        <!--right slidebar-->
        {{ HTML::style('css/slidebars.css') }}

        <!-- Custom styles for this template -->
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('css/style-responsive.css') }}

        @yield('style')
        {{ HTML::style('css/custom.css') }}

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
