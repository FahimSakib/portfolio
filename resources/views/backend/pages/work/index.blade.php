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
                @forelse ($work as $item)
                <div class="col-md-12 row mb-3">
                    <div class="col-md-12 row mb-3">
                        <div class="col-md-6">
                            <h3>Info</h3>
                        </div>
                        <div class="col-md-6 text-end">
                            <form action="{{ route('admin.work.destroy',$item->id) }}" method="POST"
                                id="delete_form_{{ $item->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a class="btn btn-danger delete_confirm" data-id="{{ $item->id }}"><i
                                    class="fas fa-trash"></i> Delete Information</a>
                            <a class="btn btn-primary" href="{{ route('admin.work.edit',$item->id) }}"><i
                                    class="fas fa-pen-to-square"></i> Edit
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
                                <th>Experience</th>
                                <td>{{ $item->experience }}</td>
                            </tr>
                            <tr>
                                <th>Heading</th>
                                <td>{{ $item->heading}}</td>
                            </tr>
                            <tr>
                                <th>Details</th>
                                <td>{{ $item->details}}</td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>
                                    {!! date('d-M-Y | h:i:s A', strtotime($item->created_at)) !!}
                                </td>
                            </tr>
                            <tr>
                                <th>Updated at</th>
                                <td>
                                    {!! date('d-M-Y | h:i:s A', strtotime($item->updated_at)) !!}
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
                            <a href="{{ route('admin.work.create') }}" class="btn btn-success btn-lg">Add
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
        var formId = $(this).data("id");
        var form = $('#delete_form_' + formId).closest("form");
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
