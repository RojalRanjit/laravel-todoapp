<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 style="text-align: center">Todo Application</h1>
    <div>
        <form action="{{route('saveTodo')}}" method="post">
            @csrf
            <input type="text" name="todo" placeholder="Enter todo item">
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>

    <div>
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Todo Item</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($list as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->title}}</td>
            <td><button class="btn btn-warning"><a href="/edit/{{$value->id}}" style="text-decoration: none">Edit</a></button></td>
            <td><button class="btn btn-danger" ><a href="/delete/{{$value->id}}" style="text-decoration: none">Delete</a></button></td>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
</body>
</html>
