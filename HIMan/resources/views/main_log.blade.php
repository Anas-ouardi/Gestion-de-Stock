@extends('layout.main')
@section('Form')
    <div class="container">
        <center class="my-5">
            <h1>Welcome bro </h1>
        </center>
        <table border="1px" class="table table-dark table-striped">
            <tr>
                <th>Id</th>
                <th>Entroprise_Name</th>
                <th>User_Name</th>
                <th>Email</th>
                <th>Phone_Number</th>
                <th>password</th>
            </tr>

            @foreach ($datas as $data)
                <tr>
                    <th>{{ $data['id'] }}</th>
                    <th>{{ $data['Entroprise_Name'] }}</th>
                    <th>{{ $data['User_Name'] }}</th>
                    <th>{{ $data['Email'] }}</th>
                    <th>{{ $data['Phone_Number'] }}</th>
                    <th>{{ $data['password'] }}</th>
                </tr>
            @endforeach


        </table>
    </div>
@endsection
