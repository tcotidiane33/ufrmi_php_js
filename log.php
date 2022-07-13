
<?php
//connexion a la base de donnee
require('config.php');
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //recuperation et verification des donnees
  if ((!empty($_POST['matricule']))) {

    //nettoyage des donnees
    $matricule = htmlspecialchars($_POST['matricule']);
    $nom = htmlspecialchars($_POST['fname']);
    $prenom = htmlspecialchars($_POST['lname']);
    $matricule = htmlspecialchars($_POST['matricule']);
    $id_filiere = htmlspecialchars($_POST['filiere']);
    $id_niveau = htmlspecialchars($_POST['level']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    //preparation de la requette d'insertion
    $insert = $conn->prepare('INSERT INTO etudiant(matricule,nom,prenom,email,password,id_niveau,id_filiere)
                             VALUES(?, ?, ?, ? , ?  ?, ?)');

    //Execution de la requette      
    $insert->execute(array($matricule, $nom, $prenom,$email, $password, $id_niveau, $id_filiere));

    //redirection ver filiere.php
    // header("location:filiere.php");
    echo "string";
  }
  else {
    $errorMsg = "Veuillez renseigner le champs";
    echo $errorMsg;
  }
}
?>

<body>
<header class="header_log">
  <div class="backgroung">
    <img src="./assets/pexels-7.jpg" style="left:0; top:0; position: absolute; z-index: -1; background-size: cover; height: 120vh; width: 100vw " alt="" srcset="">
  </div>
      <!-- Canvas -->
<canvas class="orb-canvas"></canvas>
<!-- Overlay -->
<div class="overlay">
  <!-- Overlay inner wrapper -->
  <div class="overlay__inner">
    <!-- Title -->
    <h1 class="overlay__title">
      Bienvenue sur le  site de L'UFR MI 
      <span class="text-gradient">Université Felix Félix-Houphouët-Boigny </span> de Cocody
    </h1>
    <div class="connection">
      <!-- start log -->

      <div class="modal_body">
          <div class="Sign-Up form">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
                  <div class="form-content">
                

                   <div class="form-group row my-5">
                      <div class="form-group">
                      <label for="">Enter Your Name</label>
                      <input type="text" name="fname" id="" class="form-control" placeholder="Name 'Hackerman'...." aria-describedby="helpId">
                     
                    </div>
                  </div>

                  <!-- fork form -->
                  <div class="form-group row-cols-1 my-2">
                    <label for="">Enter Last Name</label>
                  <input type="text" name="lname" class="form-control" placeholder="Last name 'Red'........." id="😋Nom" required >
                    <small id="helpId" class="text-muted">Fields required ! ...</small>
                  </div>
                    <!-- fork form -->
                    <div class="form-group">
                      <label for="">Enter Matricule</label>
                      <input type="text" name="matricule" class="form-control" placeholder="Matricule 'MI80'........." id="😋Nom" required >
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                    <!-- fork form  filiere -->
                    <div class="form-group">
                    <label for="Username">filiere</label>
                    <input type="text" name="filiere" class="form-control" placeholder="SCIENCE INFORMATIQUES ...." id="User" required >
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                    <!-- fork form -->
                    <div class="form-group btn-group dropdown">
                      <button class="btn btn-primary">Level</button>
                      <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">LMD/span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="my-dropdown">
                        <a class="dropdown-item active" href="#">LICENCE 1</a>
                        <a class="dropdown-item active" href="#">LICENCE 2</a>
                        <a class="dropdown-item active" href="#">LICENCE 3</a>
                        <a class="dropdown-item active" href="#">MASTER 1</a>
                        <a class="dropdown-item active" href="#">MASTER 2</a>
                      </div>
                    </div>
                
                    <!-- fork form -->
                    <div class="form-group">
                     
                    <label for="">Enter your Email </label>
                      <input type="email" name="email" class="form-control" placeholder="Email 'example@hugs.com' ......"
                          id="Email" required aria-required="enter a Email correct...">
            
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                    <!-- fork form -->
                    <div class="form-group">
                    <label for="">Enter your Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Your password ********" id="pw" required >
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                     <!-- fork form -->
                    <div class="form-group ">
                    <label for="">Enter a picture </label>
                      <input type="file" name="photo" class=" btn btn-dark btn-outline-light" id="pp" value="choice picture">
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                  </div>
              </form>

          </div>
        
      </div>
   

  </div>
    <!-- Description -->
    <p class="overlay__description">
      if you have a account 🙏 please <a href="./login.php"><big style="color: ;">🖱 click-Here !</big></a>
      <strong>We're gonna talk accessibility, too.</strong>
    </p>
    <!-- Buttons -->
    <div class="overlay__btns">

      <button class="overlay__btn overlay__btn--colors">
        <a href="./index.html" target="_blank">

            SIGN UP 
          </a>
      </button>
    </div>
  </div>
</div>
<!-- partial -->
</header>
<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

</html>