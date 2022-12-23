@extends('admin.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Clients Search table</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th>User_ID</th>
                                        <th>Number</th>
                                        <th>Send loc</th>
                                        <th>Next loc</th>
                                        <th>Auto</th>
                                        <th>Massa</th>
                                        <th>Create Date</th>
                                    </tr>
                                    @foreach($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->user_id }}</td>
                                        <td>{{ $client->number }}</td>
                                        <td>{{ $client->send_loc }}</td>
                                        <td>{{ $client->next_loc }}</td>
                                        <td>{{ $client->auto_type }}</td>
                                        <td>{{ $client->auto_hajm }}</td>
                                        <td>{{ $client->created_at }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody></table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{ $clients->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection