<section class="container mt-4">
    <form
        action="@isset($data) {{ route('UpdateSelector', ['id' => $data['id']]) }} @else {{ route('StoreSelector') }} @endisset "
        method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name Selector</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $data['name'] ?? null) }}">

            @error('name')
                <small style="color: red" class="is-invalid text-left alert alert-danger bg-light p-1">
                    {{ $message }}
                </small>
            @enderror

        </div>
        <div class="mb-3">
            <label class="form-label">Email Selector</label>
            <input type="text" class="form-control" name="email"
                value="{{ old('email', $data['email'] ?? null) }}">

            @error('email')
                <small style="color: red" class="is-invalid text-left alert alert-danger bg-light p-1">
                    {{ $message }}
                </small>
            @enderror

        </div>
        <div class="mb-3">
            <label class="form-label">Password Selector</label>
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
