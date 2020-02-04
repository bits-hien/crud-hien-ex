<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
  <h2>Profile</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Users</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->user }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>
          <a href="{{ route('users.edit', $user->id) }}">UPDATE</a>
          <form action="{{ route('users.destroy', $user->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">DELETE</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('users.create') }}">creat new</a>
</div>
</body>
</html>