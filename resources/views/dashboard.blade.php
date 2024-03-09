@extends('layouts.app')
@section('title', 'Dashbaord')
@section('content')
    <div class="card shadow-lg mt-5">
        <div class="card-title p-2">
            <h2 class="text-center">Registered Users</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data)
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td><a href="#" class="btn btn-dark">Edit</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-ceter" colspan="4">No User Avilable</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            {{ $data->links() }}
        </div>
    </div>
@endsection
