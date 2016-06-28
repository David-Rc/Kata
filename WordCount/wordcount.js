
//var test = "je suis suis une une une une legende legende legende !!!";


function wordCount(string){
	if(document.getElementById('text').value){

		string = document.getElementById('text').value;

	}

	document.getElementById('debut').textContent = string;

	regexp = /[a-z]/; //regexp qui vas servir à verifier si la chaine de caractére contient bien que des lettres;
			// Variable qui va servir de compteur pour le nombres de fois ou le mots vas être affiché;
	var compteur = []; // Tableau final;
	var arr = string.split(' '); //Transforme la chaine de carractere en tableau.
	var input; // Variable qui stockera chaque element du tableau à chaque tour de la boucle;
	var x = 0;

	for(var i = 0; i <= arr.length - 1; i++){

		input = arr[i]
		

		if(regexp.test(input)){

			for(var j = 0; j <= arr.length - 1; j++){
			
			if(input === arr[j]){

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