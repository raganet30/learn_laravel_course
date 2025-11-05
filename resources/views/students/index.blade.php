@extends('layouts.app')

@section('title', 'Students Page')

@section('content')
    <h2 class="mb-4">Students Page</h2>

    {{-- Search Bar --}}
    <form class="d-flex mb-3" role="search" method="GET" action="{{ URL('students') }}">
        <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search by name or email...">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>

    {{-- Students Table --}}
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->date_of_birth }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info text-white">View</a>
                            <a href="#" class="btn btn-sm btn-warning text-white">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="paginationDiv">
            {{ $students->links('pagination::bootstrap-5') }}
        </div>

    </div>
@endsection