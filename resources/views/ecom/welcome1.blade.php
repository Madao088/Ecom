<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wildkrafts!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<style>
	.input-mysize {

		width:450px;
	
	}
</style>
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Wildkrafts</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								@foreach($cat as $cat)
								<li>
									<a href="/categories/{{$cat->name}}">{{$cat->name}}</a>
								</li>
								@endforeach
							</ul>
						</li>
					</ul>
					<form action="{{route('search')}}" method="POST" class="navbar-form navbar-left" role="search">

						<div class="form-group" >
							<input type="text" class="search-query input-mysize" name="text">
						</div>
						<button type="submit" class="btn btn-default">
							Search
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Contact Us</a>
						</li>
						<li>
							<a href="#">Login/Sign-Up</a>
						</li>
					</ul>
				</div>
				
			</nav>
			<div class="jumbotron">
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<div class="carousel slide" id="carousel-835861">
					<ol class="carousel-indicators">
						<li data-slide-to="0" data-target="#carousel-835861">
						</li>
						<li data-slide-to="1" data-target="#carousel-835861" class="active">
						</li>
						<li data-slide-to="2" data-target="#carousel-835861">
						</li>
					</ol>
					<div class="carousel-inner" style="max-height: 800px">
						<div class="item">
							<img alt="Carousel Bootstrap First" src="../images/sale1.jpg" />

						</div>
						<div class="item active">
							<img alt="Carousel Bootstrap Second" src="../images/sale2.jpg" />

						</div>
						<div class="item">
							<img alt="Carousel Bootstrap Third" src="../images/sale3.jpg" />

						</div>
					</div> <a class="left carousel-control" href="#carousel-835861" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-835861" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
		</div>

</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
