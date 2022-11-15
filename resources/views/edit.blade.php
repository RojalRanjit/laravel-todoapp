<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Update</title>
</head>
<body>
    <h1 style="text-align: center">Edit Data</h1>
    <form action="{{route('updateTodo')}}" method="post">
        @csrf
        <input type="hidden" name="id" value={{$data->id}}>
        <input type="text" name="todo" value={{$data->title}}>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</body>
</html>