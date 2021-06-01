@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> View Teacher Details</h1>
    <a href="{{ route('manage-details') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-eye fa-sm text-white-50"></i> View Teacher List</a>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body rounded-0">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Category Name</th>
                            <td>{{ $detail->category->name }}</td>
                        </tr>
                        <tr>
                            <th>Teacher Name</th>
                            <td>{{ $detail ->tittle_name }}</td>
                        </tr>
                        <tr>
                            <th>Designation Name</th>
                            <td>{{ $detail ->designation_name }}</td>
                        </tr>
                        <tr>
                            <th> Image</th>
                            <td><img src="{{ asset($detail->image) }} " height="60" width="90" alt=""/></td>
                        </tr>
                        <tr>
                            <th>Full Description</th>
                            <td>{{ $detail ->full_description }}</td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{ $detail ->status== 1 ? 'Published' : 'Unpublished'  }}</td>
                        </tr>
                        <tr>
                            <th>Publication Date</th>
                            <td>{{ $detail ->created_at  }}</td>
                        </tr>
                        <tr>
                            <th>Update Date</th>
                            <td>{{ $detail ->updated_at  }}</td>
                        </tr>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection