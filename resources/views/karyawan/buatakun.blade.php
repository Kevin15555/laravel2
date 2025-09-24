@extends('layout')

@section('title', 'Karyawan - Buat Akun')

@section('content')
<div class="card shadow-sm p-5 rounded-4 border-0 mx-auto" style="max-width: 600px; background-color: #fff9f2;">
  <h4 class="mb-4 text-center fw-bold text-dark">🔐 Form Buat Akun</h4>

  <form autocomplete="off">
    <input type="text" name="fakeusernameremembered" style="display:none">
    <input type="password" name="fakepasswordremembered" style="display:none">

    <div class="mb-3">
      <label for="username" class="form-label fw-semibold">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username" style="border-color: #ff9933;" autocomplete="new-username">
    </div>

    <div class="mb-3">
      <label for="password" class="form-label fw-semibold">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" style="border-color: #ff9933;" autocomplete="new-password">
    </div>

    <div class="d-grid">
      <button type="submit" class="btn text-white rounded-pill fw-semibold" style="background-color: #ff6600;">Simpan</button>
    </div>
  </form>
</div>
@endsection
