// les variables globales utilisées dans tout le fichier

var video = document.getElementById('video');
var playpause = document.getElementById('playpause');
var lecteur_video = document.getElementById('lecteur_video');
var stopp = document.getElementById('stop');

// Les fonctions 

function JouerVideo() { 
			
		if(video.paused) {
			video.play(); 
			playpause.src='pause.png';
			}
			
		else if(video.played) {
		video.pause();
		playpause.src='playpng.png';
		}
}

function MettrePauseVideo() { 
			video.pause(); 
			video.currentTime = 0;
			playpause.src='playpng.png';
		}
		
function EffetVid() {
			video.currentTime=2;
			titre_header.style.background = "#2874a6";
			
}
		
			

// La gestion des événements (appel de fonction)

playpause.addEventListener('click', JouerVideo);
stopp.addEventListener('click', MettrePauseVideo);
video.addEventListener('ended', MettrePauseVideo);
playpause.addEventListener('click', EffetVid);