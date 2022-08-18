@extends('layout.main')
@section('Form')
    <?php $title = 'User Editure'; ?>
    <section class="container mt-4">
        <form action="{{ route('UpdateUser', ['id' => $data['id']]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Entroprise Name</label>
                <input type="text" class="form-control" name="Entroprise_Name"
                    value="{{ old('Entroprise_Name', $data['Entroprise_Name'] ?? null) }}">

                @error('Entroprise_Name')
                    <small style="color: red" class="is-invalid text-left alert alert-danger bg-light p-1">
                        {{ $message }}
                    </small>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" name="User_Name"
                    value="{{ old('User_Name', $data['User_Name'] ?? null) }}">

                @error('User_Name')
                    <small style="color: red" class="is-invalid text-left alert alert-danger bg-light p-1">
                        {{ $message }}
                    </small>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="Email"
                    value="{{ old('Email', $data['Email'] ?? null) }}">

                @error('Email')
                    <small style="color: red" class="is-invalid text-left alert alert-danger bg-light p-1">
                        {{ $message }}
                    </small>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="Phone_Number"
                    value="{{ old('Phone_Number', $data['Phone_Number'] ?? null) }}">

                @error('Phone_Number')
                    <small style="color: red" class="is-invalid text-left alert alert-danger bg-light p-1">
                        {{ $message }}
                    </small>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="text" class="form-control" name="password"
                    value="{{ old('password', $data['password'] ?? null) }}">

                @error('password')
                    <small style="color: red" class="is-invalid text-left alert alert-danger bg-light p-1">
                        {{ $message }}
                    </small>
                @enderror

            </div>
            <input type="submit" class="btn btn-primary" value="Save" />
        </form>

    </section>
@endsection
