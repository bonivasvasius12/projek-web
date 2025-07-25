<form action="/admin" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama">
    @error('name') <div>{{ $message }}</div> @enderror

    <input type="email" name="email" placeholder="Email">
    @error('email') <div>{{ $message }}</div> @enderror

    <input type="text" name="phone" placeholder="No. HP">
    @error('phone') <div>{{ $message }}</div> @enderror

    <input type="text" name="address" placeholder="Alamat">
    @error('address') <div>{{ $message }}</div> @enderror

    <select name="role">
        <option value="">-- Pilih Role --</option>
        <option value="Super Admin">Super Admin</option>
        <option value="Kasir">Kasir</option>
    </select>
    @error('role') <div>{{ $message }}</div> @enderror

    <button type="submit">Submit</button>
</form>