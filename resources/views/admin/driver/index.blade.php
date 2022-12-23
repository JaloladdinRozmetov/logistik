@extends('admin.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Drivers Table</h4>
                            <div class="card-header-form">
                                <form >
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
                                        <th>FIO</th>
                                        <th>Telefon</th>
                                        <th>Davlat Raqami</th>
                                        <th>Avtomobile</th>
                                        <th>Massa</th>
                                        <th>Send Loc</th>
                                        <th>Next Loc</th>
                                        <th>Status</th>
                                        <th>Create Date</th>
                                    </tr>
                                    @foreach($drivers as $driver)
                                        <tr>
                                            <td>{{ $driver->id }}</td>
                                            <td>{{ $driver->user_id }}</td>
                                            <td>{{ $driver->fio }}</td>
                                            <td>{{ $driver->number }}</td>
                                            <td>{{ $driver->auto_num }}</td>
                                            <td>{{ $driver->auto_type }}</td>
                                            <td>{{ $driver->auto_hajm }}</td>
                                            <td>{{ $driver->send_loc }}</td>
                                            <td>{{ $driver->next_loc }}</td>
                                            @if($driver->status == 'active')
                                                <td><button type="button" class="btn btn-outline-success">Active</button></td>
                                            @elseif($driver->status == 'inactive')
                                                <td><button type="button" class="btn btn-outline-danger">InActive</button></td>
                                            @elseif($driver->status == 'progress')
                                                <td><button type="button" class="btn btn-outline-warning">Progress</button></td>
                                            @endif
                                            <td>{{ $driver->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody></table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{ $drivers->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
