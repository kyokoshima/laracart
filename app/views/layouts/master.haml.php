%html(lang="ja")
	%head
		%meta(charset="utf-8")
		%meta(http-equiv="X-UA-Compatible" content="IE-edge")
		%meta(name="viewport" content="width=device-width, initial-scale=1")
		%meta(name="description" content="")
		%meta(nane="author" content="")
		%link(rel="icon" href="../../favicon.ico")
		%title Justified Nav Template for Bootstrap

		/ Bootstrap core CSS
		%link(href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet")
		/ Custom styles for this template 
		%link(href="justified-nav.css" rel="stylesheet")

		/ Just for debugging purposes. Don't actually copy these 2 lines!
		/[if lt IE 9]
			%script(src="../../assets/js/ie8-responsive-file-warning.js")

		%script(src="../../assets/js/ie-emulation-modes-warning.js")

		/ IE10 viewport hack for Surface/desktop Windows 8 bug
		%script(src="../../assets/js/ie10-viewport-bug-workaround.js")

		/ HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries 
		/[if lt IE 9]
			%script(src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js")
			%script(src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js")
	%body
		.container
			.row
				.col-md-4.logo
					%a(href="/")
						%h1 Laracart
			%nav.navbar.navbar-inverse(role="navigation")
				.container
					.navbar-header
						%button.navbar-toggle(type="button" data-togggle="collapse" data-target="#collapse-target")
							%span.sr-only Toggle navigation
							%span.icon-bar
							%span.icon-bar
							%span.icon-bar
						%a.navbar-brand(href="#") Brand
					.collapse.navbar-collapse#collapse-target
						%ul.nav.navbar-nav
							%li.active
								%a(href="#") Home
							%li
								%a(href="#") Link
							%li
								%a(href="#") Link
			.container
				.row
					.col-sm-3
					.col-sm-9
						/ Jumbotron
						.jumbotron
							%h1 Marketing stuff!
							%p.leadCras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.
							%p
								%a.btn.btn-lg.btn-success(href="#" role="button") Get started today

						/ Example row of columns
						.row
							.col-lg-4
								%h2 Safari bug warning!
								%p.text-danger As of v7.0.1, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.
								%p Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
								%p
									%a.btn.btn-primary(href="#" role="button") View details Â
							.col-lg-4
								%h2 Heading
								%p Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
								%p
									%a.btn.btn-primary(href="#" role="button") View details Â
							.col-lg-4
								%h2 Heading
								%p Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
								%p
									%a.btn.btn-primary(href="#" role="button") View details Â
			/ Site footer 
			.footer
				%p Â© Company 201

		/ 
			Bootstrap core JavaScript
			==================================================
		/  Placed at the end of the document so the pages load faster
  

