<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #5fa2c2;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      box-sizing: border-box;
    }

    button {
      background-color: #424242;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #898989;
    }
  </style>
</head>
<body>
  <form id="loginForm">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="button" onclick="validateForm()">Login</button>
  </form>

  <script>
    function validateForm() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      // Esempio di validazione lato client
      if (username === '' || password === '') {
        alert('Inserisci username e password');
      } 
       // Esempio di validazione lato client
    if (username === 'admin' && password === 'admin') {
      // Reindirizza l'utente alla pagina admin.index
      window.location.href = "{{ route('admin.index') }}";
    } else {
      alert('Credenziali non valide. Inserisci username e password corretti.');
    }
    }
  </script>
</body>
</html>
