<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <header>
    <h1>Mejorar header</h1>
  </header>

  <div class="container">
    <form method="post" action="{{ route('login') }}">
    @csrf
      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Iniciar sesión">
      </div>
    </form>
  </div>
</body>
</html>
