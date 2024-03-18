<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
@include('new')


<a  href="{{url('/index/create')}}">create a form</a>
<div>
    <table border="2">
<tr>
    <th>name</th>
    <th>price</th>
    <th>quality</th>
    <th>edit</th>
    <th>delete</th>
</tr>
@foreach($caps as $cap)
<tr>
    <td>{{$cap->name}}</td>    
    <td>{{$cap->price}}</td>
    <td>{{$cap->quality}}</td>
    <td><a href="{{route('edit',['cap' => $cap])}}">edit</a>
   
        <td>
        <form method="post" action="{{route('delete',['cap' => $cap])}}"> 
          @csrf
          @method('delete')
          <button>delete</button>
        </form>
        </td>
    
</td>
</tr>
@endforeach 

</div>
</table>
</body>
</html>