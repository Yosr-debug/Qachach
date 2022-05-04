<?php
//require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MY DATA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="row">
  	<div class="col-xl-12">
  		<h1 class="text-center pt-5">LISTE DES LIVRAISONS</h1>
  		<table class="table table-bordered">
  			<thead>
  				<tr>
  			
            <th>id_produit</th>
  					<th>description</th>
  					<th>prix</th>
  					<th>imagee</th>
  					<th>nom_categorie</th>

				</tr>
  			</thead>
  			<tbody>
  				<?php
  				$n=1;
  				$conn= mysqli_connect("localhost", "root","", "9achech");
              $sql = "SELECT * FROM produit";
              $result= $conn->query($sql);
              if ($result->num_rows > 0)
              {
                while($row = $result-> fetch_assoc())
                {?>
                  <tr>
                  	<td><?PHP echo $n; ?></td>
                   <td><?PHP echo $row['id_produit']; ?></td>
	                 <td><?PHP echo $row['description']; ?></td>
	                 <td><?PHP echo $row['prix']; ?></td>
	                 <td><?PHP echo $row['imagee']; ?></td>
	                 <td><?PHP echo $row['nom_categorie']; ?></td>

					</tr>
	              <?php $n++; ?>
<?php
                }
              }
                 else {

                  echo"no results";
                }
  				?>
  			</tbody>
  		</table>
        <div class="text-center">
        	<button onclick="window.print()" class="btn btn-secondary">Imprimer</button>
        	
        </div>
  	</div>
  </div>
</div>

</body>
</html>