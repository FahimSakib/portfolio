@extends('backend.layouts.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.education.index') }}">Course</a></li>
            <li class="breadcrumb-item active">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="mb-3">
                    <h4>Input Course Info</h4>
                </div>
                <form method="POST" action="{{ route('admin.education.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('exam') is-invalid @enderror" id="exam" name="exam"
                                    type="text" value="{{ old('exam') }}" placeholder="SSC" />
                                <label for="exam">Exam*</label>
                            </div>
                            @error('exam')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('school') is-invalid @enderror" id="school"
                                    name="school" type="text" value="{{ old('school') }}" placeholder="IIUC" />
                                <label for="school">School*</label>
                            </div>
                            @error('school')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('passing_year') is-invalid @enderror"
                                    id="passing_year" name="passing_year" type="number" min="2010" max="2030"
                                    value="{{ old('passing_year') }}" placeholder="2014" />
                                <label for="passing_year">Year of Passing*</label>
                            </div>
                            @error('passing_year')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('gpa') is-invalid @enderror" id="gpa" name="gpa"
                                    type="text" value="{{ old('gpa') }}" placeholder="GPA: 4.44" />
                                <label for="gpa">GPA/CGPA (i.e. GPA: 4.44)</label>
                            </div>
                            @error('gpa')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4 mb-0 text-end">
                        <button class="btn btn-danger" type="reset">Reset</button>
                        <button class="btn btn-success" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
