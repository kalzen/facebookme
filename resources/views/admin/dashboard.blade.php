@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Recent User Inputs</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
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
                        <td>{{ $input->phone }}</td>
                        <td>{{ $input->ip_address }}</td>
                        <td>
                            <span class="badge badge-{{ $input->status == 'pending' ? 'warning' : 'success' }}">
                                {{ $input->status }}
                            </span>
                        </td>
                        <td>{{ $input->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $inputs->links() }}
    </div>
</div>
@endsection
