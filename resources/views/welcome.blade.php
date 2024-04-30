<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Laravel Eloquint ORM</title>
</head>
<body>
    <div class="container">
        <h1>Eloquent ORM</h1>
        <div class="row">
            <div class="col-6">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                @endif
            </div>
          </div>
        <a href="{{route('user.create')}}" class="btn btn-primary">Add New</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
                <th scope="col">Salary</th>
                <th scope="col">DoB</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user as $show)
              <tr>
                <th scope="row">{{$show->id}}</th>
                <th scope="row">{{$show->user_name}}</th>
                <th scope="row">{{$show->f_name}}</th>
                <th scope="row">{{$show->email}}</th>
                <th scope="row">{{$show->city}}</th>
                <th scope="row">{{$show->country}}</th>
                <th scope="row">{{$show->salary}}</th>
                <th scope="row">{{$show->dob}}</th>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>