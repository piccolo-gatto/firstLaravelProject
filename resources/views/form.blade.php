<form method="POST" action="{{ url('/create') }}">
    @csrf
    <div class="form-group">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>

