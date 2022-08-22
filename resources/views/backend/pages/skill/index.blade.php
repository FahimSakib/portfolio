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
                @if (count($skills) != 0)
                <div class="text-end mb-3">
                    <a class="btn btn-primary" href="{{ route('admin.skill.create') }}">Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Percentage</th>
                                <th scope="col">Progress bar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($skills as $item)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->percentage }}</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: {{ $item->percentage }}%"
                                            aria-valuenow="{{ $item->percentage }}" aria-valuemin="0"
                                            aria-valuemax="100">{{ $item->percentage }}</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <form action="{{ route('admin.skill.destroy',$item->id) }}" method="POST"
                                            id="delete_form_{{ $item->id }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <a class="btn btn-danger delete_confirm" data-id="{{ $item->id }}"><i
                                                class="fas fa-trash"></i></a>
                                        <a class="btn btn-primary" href="{{ route('admin.skill.edit',$item->id) }}"><i
                                                class="fas fa-pen-to-square"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
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
                            <a href="{{ route('admin.skill.create') }}" class="btn btn-success btn-lg">Add
                                New</a>
                        </p>
                    </div>
                </div>
                @endif
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
