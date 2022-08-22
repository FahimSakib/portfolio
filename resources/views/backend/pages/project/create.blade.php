@extends('backend.layouts.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project</a></li>
            <li class="breadcrumb-item active">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="mb-3">
                    <h4>Input Project Info</h4>
                </div>
                <form method="POST" action="{{ route('admin.project.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                    type="text" value="{{ old('name') }}" placeholder="Laravel Base" />
                                <label for="name">Project Name*</label>
                            </div>
                            @error('name')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                                    type="text" value="{{ old('type') }}" placeholder="Project Base" />
                                <label for="type">Project Type*</label>
                            </div>
                            @error('type')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('url') is-invalid @enderror" id="url" name="url"
                                    type="text" value="{{ old('url') }}" placeholder="www.project.com" />
                                <label for="url">Project URL*</label>
                            </div>
                            @error('url')
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
