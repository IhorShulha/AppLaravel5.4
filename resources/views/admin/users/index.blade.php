@extends('layouts.admin')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
        </thead>

        <tbody>

        @if($users)

            @foreach($users as $user)
                <tr>
                    <th scope="row">1</th>

                    <td>{{$user->name}}</td>
                    <td>{{$user->photo}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->is_active  == 1 ? 'Active' : 'Not active'}}</td>
                </tr>
                @endforeach
        @endif



        </tbody>
    </table>


@stop