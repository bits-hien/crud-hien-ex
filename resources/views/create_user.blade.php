<!DOCTYPE html>
<html>
    <head>
        <title>insert infomation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="css/cv2.css">
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
