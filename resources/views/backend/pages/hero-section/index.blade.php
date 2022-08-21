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
                        
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</main>
@endsection
