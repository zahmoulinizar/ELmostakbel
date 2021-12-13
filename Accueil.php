<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <title>Accueil</title>
  <style type="text/css">
  	/* paragraph */
  	p {
  		text-transform: capitalize;
  		size: 12px;
  		font-style: normal;
  		text-align: justify;
  		font-family: lato;
  	}
  	h1 {
  		size: 18px;
  		color: red;
  		text-align: center;
  	}
    /* The navigation menu */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Navigation links */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The subnavigation menu */
.subnav {
  float: left;
  overflow: hidden;
}

/* Subnav button */
.subnav .subnavbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Add a red background color to navigation links on hover */
.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

/* Style the subnav content - positioned absolute */
.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

/* Style the subnav links */
.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

/* Add a grey background color on hover */
.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

/* When you move the mouse over the subnav container, open the subnav content */
.subnav:hover .subnav-content {
  display: block;
}
  </style>
</head>
<body>
<!-- The navigation menu -->
<div class="navbar">
    <a href="Accueil.php"> Accueil</a> 
    <div class="subnav">
    <button class="subnavbtn">cours <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
      <a href="cours collegiens.php">Cours collegiens</a>
      <a href="cours lycéens.php">Cours lycéens  </a>
      <a href="cours bacheliers.php">Cours bacheliers</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">comptes <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="compte éléve.php">Compte éléve</a>
      <a href="compte enseignant.php">  Compte enseignants</a>
      <a href="compte bacheliers.php">Compte bacheliers</a>
    </div>
  </div>
  <a href="Tarifs.php"> Tarifs</a>   
  <a href="Contact.php">Contact</a>
    <a href="Librairie.php">Librairie en ligne </a> 
  <a href="Gallerie.php"> Gallerie </a> 
  <a href="About.php"> About</a> 

</div> <br>
<table>
	<tr>
		<td>
			<h1>EL-MOSTAKBEL</h1>
			<p>
EL_MOSTAKBEL est conforme aux programmes du ministère tunisien de l'éducation et propose un collège et un lycée privés est fondé le 18/09/2006 par MR : ZBIDI MOHSEN<br>
Cette école est située dans le gouvernorat de SKHIRA de SFAX.<br>
Le Lycée EL_MOSTAKBEL a ouvert ses portes le 01 OCTOBRE 2007 avec 29 enseignants, 292 élèves dont 53 bacheliers et 93 lycéens Présentation :<br>
L'EL_MOSTAKBEL est conforme aux programmes du ministère tunisien de l'éducation et propose un collège et un lycée privés.<br>
Le Collège Privé EL_MOSTAKBEL : 7ème, 8ème et 9ème Année de Base :<br>
Destiné aux élèves venant des écoles primaires privées et publiques, avec un enseignement haut de gamme.<br>
Un programme renforcé dans les matières de base.<br>
Surveillance individuelle.<br>
Un effectif réduit dans chaque classe. Une Préparation Spéciale Pour La Compétition 9ème Année Et Les Pilotes Du Lycée.<br>
Le Lycée Privé EL_MOSTAKBEL :<br> De la 1ère à la 4ème Année Toutes Sections :<br>
Sciences humaines, économie et gestion, sciences, mathématiques, techniques et informatique.<br>
Une équipe pédagogique encadre les élèves de près.<br>
Discipline rigoureuse et contact constant avec les parents.

</p>
		</td>
		<td>
			<img src="../images/Image1.jpg" width="300" height="400">

		</td>
		<td>			<img src="../images/Image2.jpg"  width="300" height="400">			
           </td>
	</tr>
</table>
</body>
</html>
