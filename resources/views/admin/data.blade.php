@extends('admin.layout')

@section('title', 'Data Management')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">User Input Data</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>IP Address</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inputs as $input)
                    <tr>
                        <td>{{ $input->id }}</td>
                        <td>{{ $input->full_name }}</td>
                        <td>{{ $input->business_email }}</td>
                        <td>{{ $input->ip_address }}</td>
                        <td>{{ $input->status }}</td>
                        <td>{{ $input->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $inputs->links() }}
    </div>
</div>
@endsection
