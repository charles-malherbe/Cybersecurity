<?php
require 'include/header.html';
?>

<section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact</h2>
                  	<hr>
                	<br>               	
				<form>
					
					<div class="form-group">
						<div class="row">
							<div class="col">
								<label for="exampleInputEmail1">Prénom</label>
								<input id="prenom" type="text" class="form-control" placeholder="Olivier" required>
							</div>
							<div class="col">
								<label for="exampleInputEmail1">Nom</label>
								<input id="nom" type="text" class="form-control" placeholder="NOCENT" required>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Adresse mail</label>
						<input id="adresseMail" type="email" class="form-control" placeholder="exemple@mail.fr" required>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Sujet</label>
						<input id="sujet" type="text" class="form-control" placeholder="Demande de renseignement" required>
					</div>
					
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Message</label>
						<textarea id="message" class="form-control" rows="3" placeholder="Bonjour, [...]" required></textarea>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-caps-bis btn-success btn-block"><i class="fas fa-paper-plane"></i> Envoyer</button>
					</div>

            	</form>
            	
            </div>
        </div>
    </div>
</section>

<?php
require 'include/footer.html';
?>
