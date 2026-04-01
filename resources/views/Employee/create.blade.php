<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <h3 class="text-center text-primary mt-5">Add new Employee</h3> <br> <br>

    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">
          <form action="{{ route('employee.store') }}" method="POST">
    @csrf

                    <input type="text" placeholder="Enter your Name" name="name" class="form-control">
                    @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                    <br>

                   <select name="gender" class="form-control" >
                    <option value="">Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                   </select>
                    @error('gender')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                    <br>

                    <input type="number" placeholder="Enter your Age" name="age" class="form-control">
                    @error('age')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                    <br>
                    <input type="text" placeholder="Enter your designation" name="designation" class="form-control">
                    @error('designation')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                    <br>
                 <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

      <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>