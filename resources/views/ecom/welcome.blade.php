<html>
<head>

</head>
<body>
yo
<form action="" method="POST">
    <div class="wrap">
        <select name="category" id="category" onchange="subcategories(this.value)" >
            @foreach($cat as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
    </div>

</form>

<script>

    function subcategories(str) {
        var wrapper= $(".wrap");
        $(wrapper).append('<select name="sub_category" >@foreach($sub_cat as $sub_cat)<option value="{{$sub_cat->id}}">{{$sub_cat->name}}</option>@endforeach </select>');
    }

</script>
</body></html>