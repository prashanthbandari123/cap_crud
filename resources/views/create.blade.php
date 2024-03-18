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

   
    <form method="post" action="{{route('store')}}">
        @csrf
        @method('post')
        <div>
        <label>name</label>
        <input type ="text" name="name" placeholder="name">
        </div><br>
        <div>
        <label>price</label>
        <input type ="text" name="price" placeholder="price">
        </div><br>
        <div>
        <label>quality</label>
        <input type ="text" name="quality" placeholder="quality">
        </div><br>
        <button>submit</button>
    </form>
    </div>
</body>
</html>