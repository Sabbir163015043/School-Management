@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> View Teacher List</h1>
    <a href="{{ route('add-details') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-user-plus fa-sm text-white-50"></i> Add Teacher</a>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body rounded-0">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL No</th>
                            <th> Category Name</th>
                            <th> Teacher Name </th>
                            <th> Image </th>
                            
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($details as $key => $detail)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $detail->category->name }}</td>
                            <td>{{ $detail->tittle_name }}</td>
                            <td><img src="{{ asset($detail->image) }}" alt="" height="60" width="90"></td>
                           
                            <td>{{ $detail->status == 1 ? 'Published' : 'Unpublished' }}</td>
                            
                            <td>
                                <a href="{{ route('view-teacher-detail',['id' => $detail->id]) }}" class="btn btn-success btn-sm">view</a>
                                <a href="{{ route('edit-teacher',['id' => $detail->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                <a href="{{ route('delete-teacher',['id' => $detail->id]) }}" onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection