<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - IOTANESIA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body, html {
      margin: 0;
      height: 100%;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .login-container {
      display: flex;
      height: 100vh;
    }

    /* Sisi kiri */
    .left-side {
      background-color: #f36f21;
      color: white;
      width: 40%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 40px;
    }

    .left-side h1 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .left-side p {
      font-size: 16px;
    }

    /* Sisi kanan */
    .right-side {
      width: 60%;
      background-color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 50px;
    }

    .title-form {
      margin-bottom: 30px;
      font-size: 22px;
      font-weight: bold;
      color: #333;
    }

    .form-label {
      font-weight: 500;
      font-size: 14px;
    }

    .form-control {
      font-size: 14px;
      margin-bottom: 15px;
    }

    .btn-orange {
      background-color: #f36f21;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      font-weight: bold;
      font-size: 14px;
      width: 100%;
    }

    .btn-orange:hover {
      background-color: #d85e1c;
    }

    .link-register {
      display: block;
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
      color: #f36f21;
      text-decoration: none;
    }

    .link-register:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <!-- Sisi Kiri -->
    <div class="left-side">
      <h1>Selamat Datang!</h1>
      <p>Masuk ke akun IOTANESIA Anda untuk melanjutkan ke dashboard aplikasi.</p>
    </div>

    <!-- Sisi Kanan -->
    <div class="right-side">
      <div class="title-form">Login</div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
        </div>
        <button type="submit" class="btn-orange">Login</button>
      </form>
      <a href="{{ route('register') }}" class="link-register">Belum punya akun? Daftar</a>
    </div>
  </div>

</body>
</html>
