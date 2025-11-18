@extends('layouts.app')

@section('title', 'Students Page')

@section('content')
    <h2 class="mb-4">Students Page</h2>

    {{-- Search Bar --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        {{-- Search Bar --}}
        <form class="d-flex w-50" role="search" method="GET" action="{{ url('students') }}">
            <input class="form-control me-2" type="search" name="search" id="search"
                placeholder="Search by name or email...">
            <button class="btn btn-primary" type="submit">
                <i class="bi bi-search me-1"></i>
            </button>
        </form>

        {{-- Add Student Button --}}
        <a href="{{ url('students/add') }}" class="btn btn-success shadow-sm px-3 py-2 rounded-pill">
            <i class="bi bi-person-plus"></i> Add Student
        </a>

    </div>


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
                            <a href="{{ URL ('students/edit', $student->id) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                            
                            <form action="{{ URL ('students/delete', $student->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
                            </form>
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