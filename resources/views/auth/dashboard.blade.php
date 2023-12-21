<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Dashboard</title>
</head>
<body>
   <!-- resources/views/auth/dashboard.blade.php -->

   @extends('layouts.app')

@section('content')
    @include('auth.navigation')

    <div class="container">
        <h1>Welcome to the Dashboard</h1>

        <div>
            <a href="{{ route('my-model.index') }}">View All Records</a>
            <a href="{{ route('my-model.create') }}">Create New Record</a>
        </div>

        @if(isset($records) && count($records) > 0)
            <h2>Records</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                        <tr>
                            <td>{{ $record->Name }}</td>
                            <td>{{ $record->Age }}</td>
                            <td>{{ $record->Sex }}</td>
                            <td>{{ $record->Address }}</td>
                            <td>
                                <a href="{{ route('my-model.show', $record->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('my-model.edit', $record->id) }}" class="btn btn-warning">Edit</a>
                                <!-- Add your delete button if needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No records available.</p>
        @endif
    </div>
@endsection


</body>
</html>
