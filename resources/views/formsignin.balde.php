<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de connexion</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2 class="text-center">Connexion</h2>
    <form>
      <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur">
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
      <div class="text-danger mt-3">Message d'erreur en cas d'échec de connexion</div>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
