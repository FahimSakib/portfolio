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
                <form method="POST" action="{{ route('admin.skill.update',$skill->id) }}">                    
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('title') is-invalid @enderror" id="title"
                                    name="title" type="text" value="{{ $skill->title }}"
                                    placeholder="1" />
                                <label for="title">Title</label>
                            </div>
                            @error('title')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('percentage') is-invalid @enderror" id="percentage"
                                    name="percentage" type="number" min="60" max="100" value="{{ $skill->percentage }}"
                                    placeholder="1" />
                                <label for="percentage">Percentage</label>
                            </div>
                            @error('percentage')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
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
