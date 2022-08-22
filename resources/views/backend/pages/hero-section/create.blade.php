@extends('backend.layouts.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.hero.index') }}">Hero Section</a></li>
            <li class="breadcrumb-item active">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.hero.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div>
                            <h4>Navbar Info</h4>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('brandName') is-invalid @enderror" id="brandName"
                                    name="brandName" type="text" value="{{ old('brandName') }}"
                                    placeholder="i.e. Fahim" />
                                <label for="brandName">Brand Name</label>
                            </div>
                            @error('brandName')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('brandText') is-invalid @enderror" id="brandText"
                                    name="brandText" type="text" value="{{ old('brandText') }}"
                                    placeholder="i.e. Sakib" />
                                <label for="brandText">Brand Text</label>
                            </div>
                            @error('brandText')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('mobile') is-invalid @enderror" id="mobile"
                                    name="mobile" type="number" value="{{ old('mobile') }}" placeholder="Mobile" />
                                <label for="mobile">Mobile</label>
                            </div>
                            @error('mobile')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                    type="email" value="{{ old('email') }}" placeholder="Email" />
                                <label for="Email">Email</label>
                            </div>
                            @error('email')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <h4>Hero Section</h4>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control @error('welcome') is-invalid @enderror" id="welcome" name="welcome"
                            type="text" value="{{ old('welcome') }}" placeholder="welcome" />
                        <label for="welcome">Welcome Message</label>
                        @error('welcome')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                    type="text" value="{{ old('name') }}" placeholder="i.e. Fahim Sakib" />
                                <label for="name">Name</label>
                            </div>
                            @error('name')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover"
                                    type="file" placeholder="i.e. Fahim Sakib" />
                                <label for="cover">Cover Image</label>
                            </div>
                            @error('cover')
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
