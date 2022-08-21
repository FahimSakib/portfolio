@extends('backend.layouts.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">{{ isset($pageInfo['subTitle']) ? $pageInfo['subTitle'] : 'Admin'}}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                @forelse ($hero as $item)
                    
                @empty
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <p class="text-center">
                            <img src="asset/backend/assets/img/incomprehension.png" alt="no" style="width: 50%">
                        </p>
                        </div>
                        <div class="col-md-8">
                            <h5 class="text-center">There is no information available! please add your information first.</h5>
                            <p class="text-center mt-3">
                            <a href="{{ route('admin.hero.create') }}" class="btn btn-success btn-lg">Add Information</a>
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</main>
@endsection
