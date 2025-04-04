<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/estiloo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class= "container">
        <form action="processa.php" method="POST">
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email" />
    <label class="form-label" for="form2Example1">Endereço de Email</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="senha" />
    <label class="form-label" for="form2Example2">Senha</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
        <label class="form-check-label" for="form2Example34"> Lembre-me </label>
      </div>
    </div>
    <div class="col">
      <!-- Simple link -->
      <a href="#!">Esqueceu a senha?</a>
    </div>
  </div>
  <!-- Submit button -->
<input type="submit" class="bnt bnt-primary bnt-block mb-4" value="Entrar">
  <!-- Register buttons -->
  <div class="text-center">
    <p>Não é membro? <a href="#!">Registre-se</a></p>
    </button>
  </div>
</form>
</div>
<div class= "container">

</div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>