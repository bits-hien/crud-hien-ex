<!DOCTYPE html>
<html>
    <head>
        <title>insert infomation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/bootstrap4/css/bootstrap.css">
    </head>
    <body class="container">
        <h2>ĐĂNG KÝ TẠI ĐÂY</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf()
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="user" placeholder="User">
                </div>
                <div class="col">
                <input type="password" class="form-control" name="password"placeholder="Password">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col">
                <input type="text" class="form-control" name="phone"placeholder="Phone">
                </div>
            </div>
            <div class="container">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
        
    </body>
</html>
