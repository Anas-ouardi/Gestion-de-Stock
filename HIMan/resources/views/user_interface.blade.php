@extends('layout.main')

@section('Form')
    {{-- <h1>{{ $conect }}</h1> --}}

    {{-- <p>{{ $user_id }}</p> --}}
    {{-- @foreach ($data as $y)
        <span> {{$y['id']}} </span><br>
        <span> {{$y['Entroprise_Name']}}</span><br>
    @endforeach --}}

    {{-- AbdElhakym code : --}}
    <div class="container mt-5">
        <table class="text-center table table-md">
            <thead>
                <th>Entroprise Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>password</th>
                <th>Action</th>
            </thead>
            @foreach ($data as $item)
                <tbody>
                    <td> {{ $item['Entroprise_Name'] }} </td>
                    <td> {{ $item['User_Name'] }} </td>
                    <td> {{ $item['Email'] }} </td>
                    <td> {{ $item['Phone_Number'] }} </td>
                    <td> {{ $item['password'] }} </td>
                    <td>
                        {{-- <div class="d-flex">
                            <div class="me-3">
                                <form action="{{ route('DeleteSelector', ['id' => $item['id']]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                            <div>
                                <a href=" {{ route('EditSelector', ['id' => $item['id']]) }} " class="btn btn-info">Update</a>
                            </div>
                        </div> --}}
                    </td>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
