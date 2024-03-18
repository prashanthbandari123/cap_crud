<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div>
    <form method="post" action="{{url('updatecap/'.$caps->id)}}">
        @csrf
        @method("PUT")
        <div>
        <label>name</label>
        <input type ="text" name="name" placeholder="name" value="{{$caps->name}}">
        </div><br>
        <div>
        <label>price</label>
        <input type ="text" name="price" placeholder="price" value="{{$caps->price}}">
        </div><br>
        <div>
        <label>quality</label>
        <input type ="text" name="quality" placeholder="quality" value="{{$caps->quality}}">
        </div><br>
        <button>submit</button>
    </form>
    </div>
</body>
</html>