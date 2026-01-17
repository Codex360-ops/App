<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>

<body>

  <div class="wrapper">
    <section class="form signup">
      <header>Solola</header>

      <form action="login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Prenom</label>
            <input type="text" name="fname" placeholder="Prenom" required>
          </div>

          <div class="field input">
            <label>Nom de famille</label>
            <input type="text" name="lname" placeholder="Nom de fammille" required>
          </div>
        </div>

        <div class="field input">
          <label>Address email</label>
          <input type="text" name="email" placeholder="Entrez votre Adresse email" required>
        </div>

        <div class="field input">
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Entrez un nouveau mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>

        <div class="field image">
          <label>Choisissez l'Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>

        <div class="field button">
          <input type="submit" name="submit" value="Continuer à discueter">
        </div>
      </form>
      
      <div class="link">Déjà connecter? <a href="login.php">Se connecter</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
