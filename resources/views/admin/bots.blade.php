@extends('admin.layout')

@section('title', 'Bot Manager')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Bot Configurations</h3>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#botModal">
            Add New Bot
        </button>
    </div>
    <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Domain</th>
                        <th>Bot Token</th>
                        <th>Chat ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bots as $bot)
                    <tr>
                        <td>{{ $bot->id }}</td>
                        <td>{{ $bot->domain }}</td>
                        <td>{{ Str::limit($bot->bot_token, 20) }}</td>
                        <td>{{ $bot->chat_id }}</td>
                        <td>
                            <button class="btn btn-sm btn-info edit-bot" 
                                data-id="{{ $bot->id }}"
                                data-domain="{{ $bot->domain }}"
                                data-token="{{ $bot->bot_token }}"
                                data-chatid="{{ $bot->chat_id }}">
                                Edit
                            </button>
                            <form action="{{ route('admin.bots.delete', $bot->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" 
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $bots->links() }}
    </div>
</div>

<!-- Bot Modal -->
<div class="modal fade" id="botModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bot Configuration</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.bots.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="bot_id">
                    <div class="form-group">
                        <label>Domain</label>
                        <input type="text" name="domain" id="domain" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Bot Token</label>
                        <input type="text" name="bot_token" id="bot_token" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Chat ID</label>
                        <input type="text" name="chat_id" id="chat_id" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
$(document).ready(function() {
    $('.edit-bot').click(function() {
        $('#bot_id').val($(this).data('id'));
        $('#domain').val($(this).data('domain'));
        $('#bot_token').val($(this).data('token'));
        $('#chat_id').val($(this).data('chatid'));
        $('#botModal').modal('show');
    });
});
</script>
@endpush
@endsection
