@php
if($message = Session::get('success')){
toast($message,'success');
}
if($message = Session::get('error')){
toast($message,'error');
}
@endphp

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
                <div class="col-md-12 row mb-3">
                    <div class="col-md-12 row mb-3">
                        <div class="col-md-8">
                            <h3>Info</h3>
                        </div>
                        <div class="col-md-4">
                            <form action="{{ route('admin.hero.destroy',$item->id) }}" method="POST" id="delete_form">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a class="btn btn-danger delete_confirm"><i class="fas fa-trash"></i> Delete Information</a>
                            <a class="btn btn-primary" href="{{ route('admin.hero.edit',$item->id) }}"><i class="fas fa-pen-to-square"></i> Edit
                                Information</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th class="col-md-2">Fields</th>
                                <th>Details</th>
                            </tr>
                            <tr>
                                <th>brand Name</th>
                                <td>{{ $item->brandName }}</td>
                            </tr>
                            <tr>
                                <th>Brand Text</th>
                                <td>{{ $item->brandText }}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{ $item->mobile }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $item->email }}</td>
                            </tr>
                            <tr>
                                <th>Welcome Message</th>
                                <td>{{ $item->welcome }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $item->name }}</td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>
                                    {!! date('d - M - Y - h : i : s A', strtotime($item->created_at)) !!}
                                </td>
                            </tr>
                            <tr>
                                <th>Updated at</th>
                                <td>
                                    {!! date('d - M - Y - h : i : s A', strtotime($item->updated_at)) !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <img src="{{ asset('storage/hero_section/'.$item->cover) }}" alt="{{ $item->cover }}"
                            style="width: 100%">
                    </div>
                </div>

                @empty
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <p class="text-center">
                            <img src="asset/backend/assets/img/incomprehension.png" alt="no" style="width: 50%">
                        </p>
                    </div>
                    <div class="col-md-8">
                        <h5 class="text-center">There is no information available! please add your information first.
                        </h5>
                        <p class="text-center mt-3">
                            <a href="{{ route('admin.hero.create') }}" class="btn btn-success btn-lg">Add
                                Information</a>
                        </p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script src="asset/backend/js/sweetalert.min.js"></script>
<script>
    $(document).on('click', '.delete_confirm', function () {
        var form = $('#delete_form').closest("form");
        event.preventDefault();
        swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                    swal('Poof! An item has been deleted!', {
                        icon: 'success',
                        timer: 3000,
                    });
                } else {
                    swal('Your data is safe!', {
                        timer: 3000,
                    });
                }
            });
    });

</script>
@endpush
