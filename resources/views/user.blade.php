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
    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="user_name" class="form-label">User Name</label>
          <input type="text" value="{{old('user_name')}}" class="form-control" id="user_name" name="user_name" placeholder="Enter Your User Name">
        </div>
        @error('user_name')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="f_name" class="form-label">Full Name</label>
          <input type="text" value="{{old('f_name')}}" class="form-control" id="f_name" name="f_name" placeholder="Enter Your Full Name">
        </div>
        @error('f_name')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" value="{{old('email')}}" class="form-control" id="email" name="email" placeholder="Enter Your Email">
        </div>
        @error('email')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="city" class="form-label">City</label>
          <input type="text" value="{{old('city')}}" class="form-control" id="city" name="city" placeholder="Enter Your City">
        </div>
        @error('city')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="country" class="form-label">Country</label>
          <input type="text" value="{{old('country')}}" class="form-control" id="country" name="country" placeholder="Enter Your country">
        </div>
        @error('Country')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="photo" class="form-label">Photo</label>
          <input type="file" class="form-control" id="photo" name="photo" accept=".jpg,.png,.jpeg">
        </div>
        @error('photo')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="salary" class="form-label">Salary</label>
          <input type="number" value="{{old('salary')}}" class="form-control" id="salary" name="salary" placeholder="Enter Salary">
        </div>
        @error('salary')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="dob" class="form-label">DoB</label>
          <input type="date" class="form-control" id="dob" name="dob">
        </div>
        @error('dob')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        @error('password')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="confirm_password" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirm_password" name="confirm_password">
        </div>
        @error('confirm_password')
            <div class="alert alert-warning mt-5" role="alert">{{$message}}</div>
        @enderror
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div class="row">
        <div class="col-6">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
            @endif
        </div>
      </div>
      <div class="row">
        <div class="col-2">

        </div>
      </div>
    </div>
</body>
</html>