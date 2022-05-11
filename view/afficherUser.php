<?php
	include '../Controller/userC.php';
	
	$clientC=new ClientC();
	$listeClients=$clientC->afficherclient(); 
?>



	


<html>
	

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Design || Future Web</title>
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
<div class="container my-5">
  <div class="shadow-4 rounded-5 overflow-hidden">
    <div class="table">
        <div class="table_header">
            <p>Product Details</p>
            <div>  <form action="ajouterUser.php"> <input placeholder="product" /> <input type="submit" class="add_new" value="Ajouter client"  />  </form>         </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                    <th>ID</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>Email</th>
                        
                        <th>CIN</th>
                        <th>telephone</th>
                        <th>password</th>
                        <th>Action</th>
                    </tr>
                    <?php
				foreach($listeClients as $client){
			?>
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $client['id']; ?></td>
                    <td><?php echo $client['nom']; ?></td>
                    <td><?php echo $client['prenom']; ?></td>
                    <td><?php echo $client['adresse_mail']; ?></td>
                    <td><?php echo $client['num_tel']; ?></td>
                    <td><?php echo $client['cin']; ?></td>
                    <td><?php echo $client['password']; ?></td>
                    <form method="POST" action="modifier.php">
                    <td> <button><i class="fa-solid fa-pen-to-square" type="submit" name="modifier" value="modifier" ></i></button>  <button><a class="fa-solid fa-trash" href="supprimer.php?id=<?php echo $client['id']; ?>"></a></button> </td>
						<!--<input type="submit" name="modifier" value="modifier">-->
						<input type="hidden" value=<?PHP echo $client['id']; ?> name="id">
					</form>
                       <!-- <td> <button><i class="fa-solid fa-pen-to-square"></i></button> -->
                    </tr>
                    
                </tbody>
                <?php
				}
			?>
            </table>

        </div>
        <div class="pagination">
            <div><i class="fa-solid fa-angles-left"></i></div>
            <div><i class="fa-solid fa-chevron-left"></i></div>
            <div>1</div>
            <div>2</div>
            <div><i class="fa-solid fa-chevron-right"></i></div>
            <div><i class="fa-solid fa-angles-right"></i></div>
        </div>
    </div>
</body>

</html>
  
				
