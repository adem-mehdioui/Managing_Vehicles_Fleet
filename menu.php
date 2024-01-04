 <!DOCTYPE html>
<html>
<head>
	<title>Suivi Parc MGX</title>
	<meta charset="utf-8">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




<style type="text/css">
	
/* to specify width of form controls */ 

	.form-control-block {
    min-width: 0;
    width: 25%;
    display: block;
}



/* nav item a  hover */ 


nav li a:hover {  color:white; background-color:#B1B3A8;}



/* les pages sont masquées par défaut*/
.pg { 
	display:none;

}



.pg > * {
    display: block;
    margin: 30px  30px ;

}



/*
* {
  font-family: Arial, Helvetica, sans-serif;
}
 */



form label {
 /* color: #000000;
  background-color: #e3f2fd;*/
  font-weight: bold;
  
  


}

#pg1 {
   /* Background pattern from Toptal Subtle Patterns */
   
   height: 100%;
   width: 100%;


   background-image: url("images/Vehicule-de-societe.jpeg");
   background-repeat: no-repeat;
   background-size: contain;
   margin-left: 5px;
   margin-right: 5px;



  width: 99vw;
  height: 500px;
  /*background-color: #e3f2fd;*/
  background-position: 100% 0;
  background-size:60%;


}

#pg0 {
  width: 100%;
  height: 100%;
  align-content: center;
}




 .h1 {


 	 font-style: italic;
 	 font-size: 25px;

 	  }





/* this for the log out button*/

.left-icon-holder {
    position:relative;
}
.left-icon-holder .fa {
    position:absolute;
    line-height: 24px;
    top:50%;
    margin-top: -12px; /* Half of line height to keep left middle postion of container */
    left: 10px;
}

#logout {
	width: 160px;
}



fieldset {
  display: block;
  margin-left: 2px;
  margin-right: 2px;
  padding-top: 0.35em;
  padding-bottom: 0.625em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 3px #000000 solid;
}


.center {
  margin-left: auto;
  margin-right: auto;

}



.tableFixHead          { overflow: auto; height: 430px;  }
.tableFixHead thead th { position: sticky; top: 0; z-index: 1; background-color: #e3f2fd;}

/* Just common table stuff. Really. */
table  { border-collapse: collapse; width: 100%; }
th, td { padding: 8px 16px; }
th     { background:#eee; }






#myInput {
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 15%; /* Full-width */
  padding: 6px  12px   6px 12px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  float: left;
}





</style>

</head>

<body>







<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
  <div class="container-fluid">
  	
  <!--<a class="navbar-brand" href="#">
    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>!-->

    <li class="navbar-brand">Suivi Parc MGX</li>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item" >
          <a class="nav-link active fa fa-home " aria-hidden="true" aria-current="page" href="" onclick="return toggle('pg0')">Page d'acceuil</a>
        </li>


        <li class="nav-item">
          <a class="nav-link fa fa-truck" aria-hidden="true" href="#" onclick="return toggle('pg1')">Ajouter Véhicule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fa fa-bell" aria-hidden="true" href="#" onclick="return toggle('pg2')">Liste des Notifications</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fa fa-pencil-square-o" aria-hidden="true" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Mise à jour des données véhicules
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#" onclick="return toggle('pg3')">Assurances (Automobile , Marchandise)</a></li>
            <li><a class="dropdown-item" href="#" onclick="return toggle('pg4')">Controle Technique</a></li>
            <li><a class="dropdown-item" href="#" onclick="return toggle('pg5')">Vidange Vehicule</a></li>

            <li><a class="dropdown-item" href="#" onclick="return toggle('pg6')">Visite Périodique</a></li>
            <li><a class="dropdown-item" href="#" onclick="return toggle('pg7')">Autorisation de circulation véhicule (TR02)</a></li>
            <li><a class="dropdown-item" href="#" onclick="return toggle('pg8')">Agrement (TR01) , N°TR , N°IF</a></li>
            <li><a class="dropdown-item" href="#" onclick="return toggle('pg9')">Vignette</a></li>
            <li><a class="dropdown-item" href="#" onclick="return toggle('pg10')">Registre de commerce</a></li>
            <li><a class="dropdown-item" href="#" onclick="return toggle('pg11')">Agrement Sanitaire (KIA Frigo)</a></li>
            <li><a class="dropdown-item" href="#" onclick="return toggle('pg12')">Extincteur, PH, Gilet, Triangle, Crique</a></li>




          </ul>
        </li>
      </ul>
    </div>
    
      <button id="logout"  type="button" class="btn btn-outline-success my-2 my-sm-0 left-icon-holder" type="submit">
      	 <i class="fa fa-sign-out" aria-hidden="true"></i>Se déconnecter
      </button>
    
  </div>
</nav>





 <div id="pg" >
  <div id="pg0" class="pg" style="display: block;">



  <div >
     <input type="text" id="myInput" onkeyup="filter_results()" placeholder="Recherche Avancée">
     <center>
    <h4>Liste des Véhicules Sarl UMC LAB PLUS - Constantine -</h4>
  </center>

  </div>



   <?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT * FROM vehicule ORDER BY id ASC"); 
?>



<?php if($result->num_rows > 0){ ?> 



<div class="tableFixHead">
<form method="post" action="">

<center> 
<table id="myTable" class="table table-bordered table-condensed table-striped center">

<thead>
<tr>
	<th>Id véhicule</th>
	<th>Immatriculation</th>
	<th>Marque</th>
	<th>Modèle</th>
	<th>Kilomètrage</th>
	<th>Affectation Conducteur</th>
	<th>Photo Véhicule</th>
  <th>Opérations</th>

</tr>
</thead>


	<tbody>


          <?php while($row = $result->fetch_assoc()){ ?> 

<tr>

  <td><?php echo ($row['id']); ?></td>

  <td><?php echo ($row['immatriculation']); ?></dd>

  <td><?php echo ($row['marque']); ?></td>
 
  <td><?php echo ($row['modele']); ?></td>

    <td><?php echo ($row['kilometrage']); ?></td>


  <td><?php echo ($row['chauffeur']); ?></td>

  <td> <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" /></td>

    <td><input type="button" id="<?php echo $row['immatriculation']; ?>" value="Mettre à jour" class="edit" onclick="updatevehicule(this);"> 
    	<input type="button" id="delete_button1" value="Supprimer" class="delete" ></td>



</tr>


  <?php } ?> 

</tbody>
</table>


</center>
</form>
</div>






  </fieldset>


<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>




<?php 






?>



</div>





<div id="pg1"  class="pg"  > 


<h1 class="h1" style="font-style: italic; font-size: 25px;">Veuillez remplir les informations du véhicule</h1>





 <form id="formId" action=""  method="POST" enctype="multipart/form-data"   >

 
    <label for="staticmarque" >Marque</label>
    <input type="text" name="marque"  class="form-control form-control-block"  id="marque">
  

 
    <label for="inputmodele" >Modèle</label>
    <input type="text" name="modele" class="form-control form-control-block" id="modele">
 

   
    <label for="inputmatricule" >Immatriculation</label>
   <!-- <input type="text" class="form-control form-control-block" id="immatriculation" maxlength="13" minlength="12" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');"> !-->
   <input type="text" name="immatriculation" class="form-control form-control-block" id="immatriculation" maxlength="13" minlength="12" >
  
    <label for="inputkilometrage" >Kilomètrage (km)</label>
   <!-- <input type="text" class="form-control form-control-block" id="immatriculation" maxlength="13" minlength="12" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');"> !-->
   <input type="text" name="kilometrage" class="form-control form-control-block" id="kilometrage" maxlength="7" >
  


   
  <label for="formFile" class="form-label">Photo véhicule</label>
  <input name="image"  type="file" id="img-input"  class="form-control form-control-block" >
    

    
    <label for="inputState" class="form-label">Affectation Conducteur</label>

<select id="inputState" name="chauffeur" class="selectpicker form-control form-control-block" data-live-search="true" data-width="fit"  required>
     
  <option selected>Choisir...</option>
  <option>Aouina Sofiane</option>
  <option>Aissous Zahreddine</option>
  <option>Mechati Seddik</option>
  <option>Abdi Abderrahmane</option>
  <option>Amraoui Abdelghani</option>
  <option>Djedli Riad</option>
  <option>Merikhi Salah</option>
  <option>Zouaoui Sofiane</option>
  <option>Guerrot Sofiane</option>
  <option>Benamira Rabah</option>
  <option>Taleb Rached</option>
  <option>Zoghmar Ghoulam</option>
  <option>Mezdad Ali</option>
  <option>Parc MGX</option>





</select>

  
 



    <button id="validate"  type="submit" name="submit" class="btn btn-primary mb-3" style="margin-top: 10px;"  onclick="AddVehicle();" > 
    	<i class="fa fa-check-square-o" aria-hidden="true" ></i> Valider
    </button>




    <button type="button"  class="btn btn-primary mb-3" style="margin-top: 10px;" onclick="ClearFields();">
        <i class="fa fa-refresh" aria-hidden="true"></i> Réinitialiser
    </button>






</form>


<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
         $status = 'error'; 
if(!empty($_FILES["image"]["name"])) { 


echo "not empty file";
 // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 



        $marque = $_POST['marque'];
        $modele = $_POST['modele'];
        $immatriculation = $_POST['immatriculation'];
        $kilometrage = $_POST['kilometrage'];
        $chauffeur = $_POST['chauffeur'];


// Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 


          if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            //echo "$imgContent";

            // Insert image content into database 
            $insert = $db->query("INSERT into vehicule (immatriculation, marque, modele, kilometrage, photo, chauffeur) VALUES ('$immatriculation','$marque','$modele','$kilometrage','$imgContent','$chauffeur')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 

            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }


        else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 



}

 else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 





    }

    // Display status message 
echo $statusMsg; 




?>




     










  	 </div>


  <div id="pg2" class="pg"> <h1 class="h1">page des notifications sur les véhicules</h1> </div>
  <div id="pg3" class="pg"> <h1 class="h1">page pour mettre à jour les Types d'Assurances</h1> </div>
  <div id="pg4" class="pg"> <h1 class="h1">page pour mettre à jour controle technique (Scanner)</h1> </div>
  <div id="pg5" class="pg"> <h1 class="h1">page pour mettre à jour vidange véhicules</h1> </div>


  <div id="pg6" class="pg"> <h1 class="h1">page pour mettre à jour visite périodique</h1> </div>
  <div id="pg7" class="pg"> <h1 class="h1">page pour mettre à jour autorisation de circulation véhicule (TR02)</h1> </div>
    <div id="pg8" class="pg"> <h1 class="h1">page pour mettre à jour agrement (TR01) , N°TR , N°IF</h1> </div>
  <div id="pg9" class="pg"> <h1 class="h1">page pour mettre à jour la vignette</h1> </div>
  <div id="pg10" class="pg"> <h1 class="h1">page pour mettre à jour le registre de commerce</h1> </div>
  <div id="pg11" class="pg"> <h1 class="h1">page pour mettre à jour l'agrement Sanitaire (KIA Frigo)</h1> </div>
  <div id="pg12" class="pg"> <h1 class="h1">page pour mettre à jour Extincteur, PH, Gilet, Triangle, Crique</h1> </div>







 </div>



<script type="text/javascript">
	



	function ClearFields() {

     document.getElementById("marque").value = "";
     document.getElementById("modele").value = "";
     document.getElementById("immatriculation").value = "";
     document.getElementById("img-input").value = "";
     document.getElementById("inputState").selectedIndex = 0;

     //alert("hello");


}







    function AddVehicle()  {



   //check if the vehicle is already contained in the database

   //insert the new row in table vehicle 


     alert("Véhicule Ajouté !");



      
 // clear all fields

/*
   $('#formId')[0].reset();
   return false;              */


   // Prevent page refresh




    }


//this if for editing vehicle from table

    function updatevehicule(car) {

/*
  let text;
  let kilometrage = prompt("Saisir Kilometrage de véhicule " + car.id , );
  if (kilometrage == null || kilometrage == "") {
    text = "Vous avez fermé la fenetre.";
  } else {






  //executer une requete sql  PUT 


    text = "le véhicule immatriculé " + car.id + " a roulé " + kilometrage + " km" ;
    alert("" + text);
  }

*/


alert(car.id);
    



    }







//this if for changing div content when nav item gets clicked !!!

function toggle(IDS) {
  var sel = document.getElementById('pg').getElementsByTagName('div');
  for (var i=0; i<sel.length; i++) { 
    if (sel[i].id != IDS) { sel[i].style.display = 'none'; }
  }
  var status = document.getElementById(IDS).style.display;
  if (status == 'block') { document.getElementById(IDS).style.display = 'block'; }
                    else { document.getElementById(IDS).style.display = 'block'; }


//this is to refresh the first page : acceuil to be able to show all div tags
                    $("#pg0").load(" #pg0 > *");



  return true;


 
}


function filter_results() {


  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (var i = 1; i < tr.length; i++) {
    var tds = tr[i].getElementsByTagName("td");
    var flag = false;

    for (var j =0; j < tds.length; j++){

    var td = tds[j];
    if(td.innerHTML.toUpperCase().indexOf(filter) > -1){
      flag = true;
    }




    }


if(flag) {
  tr[i].style.display="";
}
else {
  tr[i].style.display="none";
}
 
    }
  


}












//make navbar fixed on page scroll

document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 







</script>
</body>
</html>