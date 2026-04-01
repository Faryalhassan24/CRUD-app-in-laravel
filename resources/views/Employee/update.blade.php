<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
   <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

</head>

<body>

<h3 class="text-center text-warning mt-5">Update Employee</h3>

<div class="container">
    <div class="row">
        <div class="col-5 mx-auto">

            <!-- Update Form -->
            <form action="{{ route('employee.update', $emp->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name -->
                <input type="text" 
                       name="name" 
                       class="form-control" 
                       placeholder="Enter your Name" 
                       value="{{ $emp->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>

                <!-- Gender -->
                <select name="gender" class="form-control">
                    <option value="">Select gender</option>
                    <option value="Male" {{ $emp->gender=='Male'}} selected >Male</option>
                    <option value="Female" {{ $emp->gender=='Female'}} selected>Female</option>
                </select>
                @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>

                <!-- Age -->
                <input type="number" 
                       name="age" 
                       class="form-control" 
                       placeholder="Enter your Age" 
                       value="{{ $emp->age }}">
                @error('age')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>

                <!-- Designation -->
                <input type="text" 
                       name="designation" 
                       class="form-control" 
                       placeholder="Enter your designation" 
                       value="{{ $emp->designation }}">
                @error('designation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-warning w-100">
                    Update Employee
                </button>

            </form>

            <!-- Back Button -->
            <a href="{{ route('employee.index') }}" class="btn btn-secondary mt-3 w-100">
                Back to List
            </a>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>

