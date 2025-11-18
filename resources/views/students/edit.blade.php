@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
    <div class="container-fluid">
        <a href="{{ url('students') }}" class="btn btn-secondary shadow-sm px-3 py-2 ">
            <i class="bi bi-arrow-return-left"></i> Back
        </a>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Edit Student</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ URL ('students/update', $student->id) }}" method="POST">
                            @csrf
                            {{-- Name --}}
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg" 
                                    id="name"
                                    name="name" 
                                    value="{{ $student->name }}"
                                >
                            </div>

                            {{-- Email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input 
                                    type="email" 
                                    class="form-control form-control-lg" 
                                    id="email" 
                                    name="email"
                                   value = "{{ $student->email }}"
                                >
                            </div>

                            {{-- Age --}}
                            <div class="mb-3">
                                <label for="age" class="form-label fw-semibold">Age</label>
                                <input 
                                    type="number" 
                                    class="form-control form-control-lg" 
                                    id="age" 
                                    name="age"
                                    value="{{ $student->age }}"
                                >
                            </div>

                            {{-- Date of Birth --}}
                            <div class="mb-3">
                                <label for="dob" class="form-label fw-semibold">Date of Birth</label>
                                <input 
                                    type="date" 
                                    class="form-control form-control-lg" 
                                    name="date_of_birth"
                                    id="date_of_birth"
                                    value="{{ $student->date_of_birth }}"
                                >
                            </div>

                            {{-- Gender --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold d-block">Gender</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="m" {{ $student->gender == 'm' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="f" {{ $student->gender == 'f' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-secondary me-2 px-4">Clear</button>
                                <button type="submit" class="btn btn-success px-4">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
