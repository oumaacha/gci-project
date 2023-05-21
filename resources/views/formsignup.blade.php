<!DOCTYPE html>
<html>
<head>
  <title>Formulaire d'inscription</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2 class="text-center">Inscription</h2>
    <form>
      <div class="form-group">
        <label for="fullname">Nom complet</label>
        <input type="text" class="form-control" id="fullname" placeholder="Nom complet">
      </div>
      <div class="form-group">
        <label for="email">Adresse e-mail</label>
        <input type="email" class="form-control" id="email" placeholder="Adresse e-mail">
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirmez le mot de passe</label>
        <input type="password" class="form-control" id="confirm-password" placeholder="Confirmez le mot de passe">
      </div>
      <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
      <div class="text-danger mt-3">Message d'erreur en cas d'échec d'inscription</div>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
