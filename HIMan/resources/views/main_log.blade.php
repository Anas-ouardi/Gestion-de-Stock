@extends('layout.main')
@section('Form')
    <h1>Welcome bro </h1>
        <table border="1px">
            <tr>
                <th>Id</th>
                <th>SRC</th>
                <th>Entroprise_Name</th>
                <th>User_Name</th>
                <th>Email</th>
                <th>Phone_Number</th>
                <th>password</th>
            </tr>

            @foreach ($datas as $data)
            <tr>
            <th>{{$data['id']}}</th>
            <th>{{$data['src']}}</th>
            <th>{{$data['Entroprise_Name']}}</th>
            <th>{{$data['User_Name']}}</th>
            <th>{{$data['Email']}}</th>
            <th>{{$data['Phone_Number']}}</th>
            <th>{{$data['password']}}</th>
            </tr>
            @endforeach


        </table>

        @foreach ($datas as $y)
            <img src=" {{ asset($y['src']) }}" style="width: 200px" alt="nom">
            <ul>
                <li> {{$y['src']}} </li>
            </ul>
           
        @endforeach
    
@endsection
    
