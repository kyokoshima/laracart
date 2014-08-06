<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    {{ javascript_include_tag('ie-emulation-modes-warning.js') }}


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    {{ javascript_include_tag('ie10-viewport-bug-workaround.js') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
			<div class="row">
				<div class="col-md-4 logo">
					<a href="/">
						<h1>Laracart</h1>
					</a>
				</div>
			</div>
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-togggle="collapse" data-target="#collapse-target">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<a class="navbar-brand" href="#">Brand</a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="collapse-target">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-9">
            @yield('content')

      		</div>
				</div>
			</div>
      <!-- Site footer -->
      <div class="footer">
        <p>© Company 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ javascript_include_tag() }}


</body></html>
