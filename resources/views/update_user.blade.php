<!DOCTYPE html>
<html>
    <head>
        <title>insert infomation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="css/cv2.css">
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
