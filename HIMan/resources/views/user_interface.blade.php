@extends('layout.main')

@section('Form')
    {{-- <h1>{{ $conect }}</h1> --}}

    {{-- <p>{{ $user_id }}</p> --}}
    {{-- @foreach ($data as $y)
        <span> {{$y['id']}} </span><br>
        <span> {{$y['Entroprise_Name']}}</span><br>
    @endforeach --}}

    {{-- AbdElhakym code : --}}
    <div class="container">
        <table class="text-center table table-md">
            <thead>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>created at</th>
                <th>updated at</th>
                <th>Action</th>
            </thead>
            @foreach ($data as $item)
                <tbody>
                    <td> {{ $item['name'] }} </td>
                    <td> {{ $item['email'] }} </td>
                    <td> {{ $item['password'] }} </td>
                    <td> {{ $item['created_at'] }} </td>
                    <td> {{ $item['updated_at'] }} </td>
                    <td>
                        <div class="d-flex">
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
                        </div>
                    </td>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
