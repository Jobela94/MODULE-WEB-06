	// TOUTES LES FONCTIONS 
	
function carre(nombre) {
	return nombre * nombre;
}

function visiteur() {		
	var numero = Math.floor(Math.random() * 1000);
	var texte = " Tu es le visiteur numero : " + numero;
	alert(texte);
	console.log(texte);
	}

	function ChangeTitre() {
		var changer = document.getElementById("titre_header");
	
	if(changer.innerHTML=="MON CV DE STAGE")
		changer.innerHTML="JOEL OBELA";
		
	else 
		changer.innerHTML="MON CV DE STAGE";
}

	function ChangerTheme(){
		document.getElementById("theme_blue").addEventListener('click', ChangerTheme);
		document.getElementById("theme_orange").addEventListener('click', ChangerTheme);
		
		// Changer la couleur en bleu :
		
		if (this.id=="theme_blue") {
			console.debug("changement de couleur en bleu");
			p_footer.style.background = "#2874a6";
			ma_nav.style.background = "#2874a6";
			titre_header.style.background = "#2874a6";
			b_ody.style.background = "#2874a6";
		}
		
		// Changer la couleur en orange :
		
		else if (this.id=="theme_orange") {
			console.debug("changement de couleur en orange");
			p_footer.style.background = "#cc5500";
			ma_nav.style.background = "#cc5500";
			titre_header.style.background = "#cc5500";
			b_ody.style.background = "#cc5500";
		}
}
	// Navigation !!!
	
	function changerSection() {
		document.getElementById("nav_mon_cv").addEventListener('click', changerSection);
		document.getElementById("nav_mon_site").addEventListener('click', changerSection);
		document.getElementById("nav_connexion").addEventListener('click', changerSection);
		document.getElementById("nav_inscription").addEventListener('click', changerSection);
		
			if(this.id=="nav_connexion") {
				inscription.style.display = "none";
				mon_cv.style.display= "none";
				connexion.style.display = "block";
				
			}
			
			else if(this.id=="nav_mon_cv") {
				inscription.style.display ="none";
				mon_cv.style.display="block";
				connexion.style.display = "none";
				
			}
			
			else if(this.id=="nav_inscription") {
				inscription.style.display = "block";
				mon_cv.style.display= "none";
				connexion.style.display = "none";
				
			}
			
}
		// EVENEMENTS APPEL DE FONCTION
		window.onload = function() {
	
		// Fonction visiteur
		var truc = document.getElementById("p_footer");
			truc.addEventListener('dblclick', visiteur);
		
		// Fonction ChangerTitre 
		var truc2 = document.getElementById("titre_header");
			truc2.addEventListener('mouseover', ChangeTitre);
	
		// Fonction ChangerTheme 
			document.getElementById("theme_blue").addEventListener('click', ChangerTheme);
			document.getElementById("theme_orange").addEventListener('click', ChangerTheme);
			console.debug("changement de couleur");
			
		// Fonction changerSection
		document.getElementById("nav_mon_cv").addEventListener('click', changerSection);
		document.getElementById("nav_connexion").addEventListener('click', changerSection);
		document.getElementById("nav_inscription").addEventListener('click', changerSection);
}
	