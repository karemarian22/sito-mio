<?php
$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$cognome = (isset($_POST['cognome'])) ? $_POST['cognome'] : '';
$indirizzo = (isset($_POST['indirizzo'])) ? $_POST['indirizzo'] : '';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>My form</title>
  </head>
  <body>
    <div class="container">

		<?php if (empty($nome)): ?>
			
		<?php else: ?>
					<div class="alert alert-danger" role="alert">
  Error <a href="#" class="alert-link">an example link</a>.Errore
</div>
		<?php endif; ?>

    	<div class="alert alert-primary" role="alert">
			<ul>
    		<?php
    		 foreach ($_POST as $key => $value) {
    		   print '<li>' . $key . ': ' . $value . '</li>';
    		 }
    		?>
    	    </ul>
    	</div>
		    	<h1>inserisci i tuoi dati</h1>

			    <form action="index.php" method="post">
			  		<div class="form-group">
				    	<label for="name"> Nome:</label>
				    	<input type="text  class="form-control" id="name" name="nome" aria-describedby="emailHelp" placeholder="Il tuo nome ">
				    	<small id="emailHelp" class="form-text text-muted">Iserisci il tuo nome</small>
				    </div>
			  		<div class="form-group">
			    		<label for="name"> Cognome:</label>
			    		<input type="text  class="form-control" id="surname" name="cognome" aria-describedby="emailHelp" placeholder="Il tuo cognome ">
			    		<small id="emailHelp" class="form-text text-muted">Iserisci il tuo cognome</small>
			  		</div>
			  		<div class="form-group">
				    	<label for="name"> Indirizzo:</label>
				    	<input type="text  class="form-control" id="address" name="indirizzo" aria-describedby="emailHelp" placeholder="Il tuo indirizzo ">
				    	<small id="emailHelp" class="form-text text-muted">Iserisci il tuo indirizzo</small>
			    	</div>
			    	<button type="submit" class="btn btn-primary">Invia</button>
			    </form>
		
  	</div>
  
   <table class="table table-hover table-dark">
  <thead>
    <tr align="center">
    	<th scope="col">Home</th>
    	<th scope="col">Storia</th>
    	<th scope="col">Crediti</th>
    	<th scope="col">chi sono?</th>
    </tr>
  </thead>
</table>

	<div class="d-flex align-items-center" style="height: 500px">
		<div class="flex-grow-1"></div>
		<div class="text-center p-3 mb-2 bg-dark text-white">
			<p>Ognuno è un genio. Ma se si giudica un pesce dalla sua abilità di arrampicarsi sugli alberi</p> <p>lui passerà tutta la sua vita a credersi stupido.</p>
		</div>
		<div class="flex-grow-1"></div>
	</div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 
<!-- animista.net -->
