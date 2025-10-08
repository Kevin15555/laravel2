<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Buat Akun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      height: 100vh;
    }
    .register-container { display: flex; height: 100vh; }
    .left-side {
      background-color: #f36f21; color: white; width: 40%; padding: 40px;
      display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;
    }
    .left-side h1 { font-size: 32px; margin-bottom: 20px; }
    .left-side p { font-size: 16px; }
    .right-side {
      width: 60%; padding: 50px; background-color: white;
      display: flex; flex-direction: column; justify-content: center;
    }
    .form-label { font-weight: 500; font-size: 14px; }
    .form-control { font-size: 14px; }
    .btn-orange {
      background-color: #f36f21; color: white; border: none;
      padding: 8px 20px; border-radius: 6px; font-weight: bold; font-size: 14px;
    }
    .btn-orange:hover { background-color: #d85e1c; }
    .title-form { margin-bottom: 30px; font-size: 22px; font-weight: bold; color: #333; }
  </style>
</head>
<body>

  <div class="register-container">
    <!-- Sisi Kiri -->
    <div class="left-side">
      <h1>Welcome!</h1>
      <p>Silakan buat akun baru untuk melanjutkan ke dashboard aplikasi.</p>
    </div>

    <!-- Sisi Kanan -->
    <div class="right-side">
      <div class="title-form">Buat Akun</div>
      <form method="POST" action="{{ route('buat-akun.store') }}" autocomplete="off">
        @csrf
        <div class="row">
          <!-- Kolom kiri -->
          <div class="col-md-6">
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" name="name" autocomplete="off" required />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" autocomplete="new-password" required />
            </div>
          </div>

          <!-- Kolom kanan -->
          <div class="col-md-6">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" autocomplete="off" required />
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <select id="role" name="role" class="form-select" required>
                <option value="">Pilih Role</option>
                <option value="karyawan">Karyawan</option>
                <option value="hrd">HRD</option>
                <option value="pic">PIC</option>
              </select>
            </div>
          </div>
        </div>

        <div class="text-end mt-3">
          <button type="submit" class="btn btn-orange">Buat Akun</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
