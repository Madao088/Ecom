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
    <script>
        $('#myCarousel').carousel({
            interval: 4000
        })

        $('.carousel .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i=0;i<4;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>


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
                                        <a href="/categories/{{$cat->name}}">{{$cat->name}}</a>
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
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="jumbotron">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-4" >
            <div class="carousel slide" id="carousel-432299">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-432299">
                    </li>
                    @foreach($res as $key=>$ress)
                    <li data-slide-to="{{$key}}" data-target="#carousel-432299">
                    </li>
                    @endforeach

                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="Carousel Bootstrap First" src="../images/{{$res[0]->url}}" style="padding-left: 10%"/>

                    </div>
                    @foreach($res as $key=>$ress)
                        @if($key!==0)
                    <div class="item">
                        <img alt="Carousel Bootstrap Second" src="../images/{{$ress->url}}" style="padding-left: 10%"/>

                    </div>
                        @endif
                    @endforeach
                </div> <a class="left carousel-control" href="#carousel-432299" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-432299" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">

            <div class="row" style="padding-top: 100px">
                <h1>{{$product[0]->name}}</h1>
            </div>
            <div class="row">
               <h2> ₹ {{$product[0]->price}}</h2>
            </div>
            <div class="row">
                <h2> {{$product[0]->description}}</h2>
            </div>
            <div class="row" style="padding-top: 100px;padding-left: 20px">
                <form action="{{route('buy')}}" method="post">
                    <input type="hidden" value="{{$product[0]->id}}" name="id" >
                    <input type="submit" class="btn btn-danger btn-lg"  value="Buy">
                </form>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-5">

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-5">

        </div>
    </div>



</div>



<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
