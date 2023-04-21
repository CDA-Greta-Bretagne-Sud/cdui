<?php 
session_start();
include_once('util/util.php');
if(auth()=="OK"){
include_once('layouts/header.php'); ?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Titre</h1>
							<span class="image main"><img src="images/pic13.jpg" alt="" /></span>
							<p>Logoden biniou degemer mat an penn ar bed fest aour a sal plijadur a Baden verc’h, Kernev loa jod bale kuz’h aet gwez kouezhañ sadorn tal chaseour beajourien metrad purgator.Plegad-Gwerann 
								kant barzh bag nemet  forzh sec’hed aour dreist dall nijal, c’hwec’hvet Ar Releg-Kerhuon pegoulz mirout menoz nadoz den wenodenn fest gwin, brudet reas pep pesk wechoù Pempoull c’hav egistañ kelenner.
							Logoden biniou degemer mat an penn ar bed fest aour a sal plijadur a Baden verc’h, Kernev loa jod bale kuz’h aet gwez kouezhañ sadorn tal chaseour beajourien metrad purgator.</p>
							<p>Moulañ c’hilpenn gozh da harp kuzhat lien gervel An Alre c’hilhog lizher, roud huanadiñ zo nag pegeit ar walc’h gwinegr nebeutoc’h uhelder, vilin ganeoc'h gwin roll amann kêr rev pemzek gontell.
							Logoden biniou degemer mat an penn ar bed fest aour a sal plijadur a Baden verc’h, Kernev loa jod bale kuz’h aet gwez kouezhañ sadorn tal chaseour beajourien metrad purgator.</p>
						</div>
					</div>

<?php include_once('layouts/footer.php');
}
else 
header('Location: index.php');


?>