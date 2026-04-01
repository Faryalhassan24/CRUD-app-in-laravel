<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Records</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>

    <h1 class="text-danger text-center my-4">Employee Records</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">

{{-- <a href="{{ action([\App\Http\Controllers\EmployeeController::class, 'create']) }}" class="btn btn-outline-info">
    Add new Employee
</a> --}}
<a href="{{ route('employee.create') }}" class="btn btn-outline-info">
    Add new Employee
</a>
<br><br>

        @include('Alerts.message')        
    <table class="table table-bordered text-center table-striped table-hover">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>designation</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($employee as $emp)
            <tr>
                <td>{{ $emp->id }}</td>
                <td>{{ $emp->name }}</td>
                <td>{{ $emp->gender }}</td>
                <td>{{ $emp->age }}</td>
                <td>{{ $emp->designation }}</td>
                <td><a class="btn btn-warning btn-sm" href="{{ route('employee.edit', $emp->id) }}">Edit</a>

                <td> <form action="{{ route('employee.destroy', $emp->id) }}" method="POST"> 
                    @csrf 
                    @method('DELETE') 
                <button type="submit" class="btn btn-danger btn-sm" 
                onclick="return confirm('Are you sure you want to delete this record?')"> Delete
                     </button>
                    </form>
                 </td>
            </tr>
        @endforeach
    </tbody>

</table>
                

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 (no jQuery needed) -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>