@extends('backend.layouts.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.work.index') }}">Work</a></li>
            <li class="breadcrumb-item active">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.work.update',$work->id) }}">                    
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('experience') is-invalid @enderror" id="experience"
                                    name="experience" type="number" min="1" value="{{ $work->experience }}"
                                    placeholder="1" />
                                <label for="experience">Experience</label>
                            </div>
                            @error('experience')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('heading') is-invalid @enderror" id="heading"
                                    name="heading" type="text" value="{{ $work->heading }}"
                                    placeholder="Website around" />
                                <label for="heading">Brand Text</label>
                            </div>
                            @error('heading')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('details') is-invalid @enderror" id="details"
                            name="details" type="text" rows="3">{{ $work->details }}</textarea>
                        <label for="details">Details</label>
                        @error('details')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-4 mb-0 text-end">
                        <button class="btn btn-danger" type="reset">Reset</button>
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
