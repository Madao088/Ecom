<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wildkrafts!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
        .input-mysize {

            width:450px;

        }


    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>



</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="\">Wildkrafts</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                @foreach($cat as $cat)
                                    <li>
                                        <a href="#">{{$cat->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <form action="{{route('search')}}" method="POST" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
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
                            <a href="#">Login/Sign-up</a>
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
                <h3 align="center">Most Popular</h3>
                <div class="well">
                    <div id="myCarousel" class="carousel slide">

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <!--/item-->
                            <div class="item active">
                                <div class="row">

                                    <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="../images/{{$pop[0]->url}}" alt="Image" style="height: 250px;" class="img-responsive"></a>
                                    </div>
                                    <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="../images/{{$pop[1]->url}}" alt="Image" style="height: 250px;" class="img-responsive"></a>
                                    </div>
                                    <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="../images/{{$pop[2]->url}}" alt="Image" style="height: 250px;" class="img-responsive"></a>
                                    </div>
                                    <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="../images/{{$pop[3]->url}}" alt="Image" style="height: 250px;" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">

                                    <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="../images/{{$pop[4]->url}}" style="height: 250px;" alt="Image" class="img-responsive"></a>
                                    </div>

                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                        </div>
                        <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                    </div>
                    <!--/myCarousel-->
                </div>
                <!--/well-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
            <h2>Results for '{{$search}}'</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>


        <div class="col-md-8">

            <div class="well">
                <div id="myCarousel" class="carousel slide">

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <!--/item-->
                        <div class="item active">
                            <div class="row" id="forfilter">
                                @foreach($res as $res)

                                    <div class="col-sm-3 y{{$res->sub_cat_id}}">
                                        <a href="../product/{{$res->name}}" class="thumbnail"><img src="../images/{{$res->url}}" alt="Image" class="img-responsive" style="height: 250px;" ></a>
                                        <a href="../product/{{$res->name}}">{{$res->name}}</a>
                                        <p>₹ {{$res->price}}</p>
                                    </div>

                                @endforeach
                            </div>
                            <!--/row-->
                        </div>
                        <!--/item-->

                        <!--/item-->
                    </div>
                </div>
                <!--/myCarousel-->
            </div>
            <!--/well-->
        </div>

    </div>



</div>


</body>
</html>

<script>

    function filter(x){
        var content=$('#forfilter').html();
        $("#forfilter").children().hide();
        console.log(content);
        var y="'."+x+"'";
        console.log($("#y"+x).html());

        var elements = document.getElementsByClassName(x);
        for(var i = 0, length = elements.length; i < length; i++) {

            elements[i].style.display = 'initial';

        }





    }


</script>