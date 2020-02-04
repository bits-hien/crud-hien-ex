<!DOCTYPE html>
<html>
    <head>
        <title>insert infomation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/bootstrap4/css/bootstrap.css">
    </head>
    <body class="container">
        <h2>SỬA THÔNG TIN TẠI ĐÂY</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="row">
                <input type="integer" class="form-control" name="id" value="{{ $user->id }}">
                <input type="text" class="form-control" name="user" value="{{ $user->user }}">
                <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
            </div>
            <button class="btn btn-danger" type="submit">Submit</button>
        </form>
    </body>
</html>
