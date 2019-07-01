@extends('template.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="centered">
        <br>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Registered</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row"></th>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
