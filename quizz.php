<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tables de multiplication</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  </head>

  <body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Schooltab</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="accueil.php">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Tables de multiplication</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quizz.php">Révisions</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<br>
<div class="container">
  <h1  class="text-center"> Quizz </h1>
<br>
<div class="col-2">
     </div>
</div>

<div class="row">
     <div class="col-3">
     </div>

               <div class="col-6">
                 <h2 class="text-center">Choisissez une table et résolvez les opérations proposés </h2>
    <form method="POST" action="quizz.php">
    <section class="p-3 mb-2 warning-color text-white">

                    <label><input type="radio" name="check[]" value="0" class="radio" /> Table de 0</label>
                    <label><input type="radio" name="check[]" value="1" class="radio" /> Table de 1</label>
                    <label><input type="radio" name="check[]" value="2" class="radio" /> Table de 2</label>
                    <label><input type="radio" name="check[]" value="3" class="radio" /> Table de 3</label>
                    <label><input type="radio" name="check[]" value="4" class="radio" /> Table de 4</label>
                    <label><input type="radio" name="check[]" value="5" class="radio" /> Table de 5</label>
                    <label><input type="radio" name="check[]" value="6" class="radio" /> Table de 6</label>
                    <label><input type="radio" name="check[]" value="7" class="radio" /> Table de 7</label>
                    <label><input type="radio" name="check[]" value="8" class="radio" /> Table de 8</label>
                    <label><input type="radio" name="check[]" value="9" class="radio" /> Table de 9</label>
                    <label><input type="radio" name="check[]" value="10" class="radio" /> Table de 10</label>

                    <br><br>
      <button class="btn orange accent-4" type="submit">Voir la table</button>
      <button type="reset" class="btn btn-danger">Annuler</button>



        </section>
    </form>
 </div>
       <div class="col-3"></div>

</div>
<div class="row">
<div class="col-3"></div>
<div class="col-6">
<div class="p-3 mb-2 warning-color-dark text-white">

    <form action="quizz.php" method="post">

       <div class="row">
       <div class="col-9">
        <?php
        if (!empty($_POST) && isset($_POST['check']))
            foreach ($_POST['check'] as $table) :
                ?>
                <h1>Table de
                    <?php echo $table ?>
                </h1>

                <?php
                for ($i = 0; $i < 5; $i++) :
                    $randnumb = rand(0,10);
                    $result = $table * $randnumb;
                    ?>

                    <p>Combien font <?php echo $table?> x <?php echo $randnumb?> ?</p>
                    <input type="text" name="answer[]">
                    <input type="hidden" name="result[]" value="<?= $result ?>">
                    <input type="hidden" name="question[]" value="Combien font <?php echo $table?> x <?php echo $randnumb?> ?">

                <?php endfor ?>
                </div>
                <div class="3"><br><br><br><br><br><br><br><br><br>
                <button class="btn btn-danger" type="submit" id="validmultiple">Valider</button>
                </div>
            </div>

            <?php endforeach ?>

        </section>
    </form>
             </div>
    </div>
    <div class="col-3"></div>
       <div>
</div>





<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

  </body>
</html>
