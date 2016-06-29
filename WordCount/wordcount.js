
var test = "Je suis le plus beau, le plus grand, le plus fort. Mohamed Ali";

function wordCount(string){
	if(document.getElementById('text').value){

		string = document.getElementById('text').value;

	}

	//Verification et suppression des séparateur : . , ;
	var virgule = string.split(',');
	if(virgule){
		var join = virgule.join(' ');
	}
	var point = join.split('.');
	if(point){
		var join = point.join(' ');
	}
	var pointVirgule = join.split(';');
	if(pointVirgule){
		var join = pointVirgule.join(' ');
	}
	var deuxPoint = join.split(':');
	if(deuxPoint){
		var join = deuxPoint.join(' ');
	}
	var enderscore = join.split('_');
	if(enderscore){
		join = enderscore.join(' ');
	}
	var traitUnion = join.split("-");
	if(traitUnion){
		join = traitUnion.join(' ');
	}
	
	var arr = join.split(' ');	


	document.getElementById('debut').textContent = string;

	regexp = /[a-z]/; //regexp qui vas servir à verifier si la chaine de caractére contient bien que des lettres;
	var x = 0;	// Variable qui va servir de compteur pour le nombres de fois ou le mots vas être affiché;
	var compteur = []; // Tableau final;
	
	var input; // Variable qui stockera chaque element du tableau à chaque tour de la boucle;
	

	for(var i = 0; i <= arr.length - 1; i++){

		input = arr[i].toLowerCase();
		

		if(regexp.test(input) || input.length === 1){

			for(var j = 0; j <= arr.length - 1; j++){

				var compare = arr[j].toLowerCase()
			
			if(input === compare){

				x++;

			}

		}
		
		// Modifie l'élément du tableau en une chaine de caractére :
		var output = input + ' => ' + x;
		
		// condition pour éviter de retrouvé x fois le même output :
		if(compteur.indexOf(output) <= -1){

			compteur.push(output);

		}

		}else{

			console.log('error : ', input);
		}

		// Reinitialisation de x :
		x = 0;
	}
			
	
	document.getElementById('fin').textContent = compteur.join(' ');
}

//wordCount(test);