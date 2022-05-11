<?php



session_start();

    if(!isset($_SESSION['adresse_email']))
    {
        header("location:index.php");
    }
   

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
                <p> Details</p>
                
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
                        
               
                    </thead>
                    <tbody>
                        <tr>
                        <td><?php echo $_SESSION['id']; ?></td>
                        <td><?php echo $_SESSION['nom']; ?></td>
                        <td><?php echo $_SESSION['prenom']; ?></td>
                        <td><?php echo $_SESSION['adresse_email']; ?></td>
                        <td><?php echo $_SESSION['num_tel']; ?></td>
                        <td><?php echo $_SESSION['cin']; ?></td>
                        <td><?php echo $_SESSION['password']; ?></td>
                        <form method="POST" action="modif.user.php">
                        <td> <button><i class="fa-solid fa-pen-to-square" type="submit" name="modifier" value="modifier" ></i></button>  <button><a class="fa-solid fa-trash" href="sup.php?id=<?php echo $_SESSION['id']; ?>"></a></button> </td>
                            <!--<input type="submit" name="modifier" value="modifier">-->
                            <input type="hidden" value=<?PHP echo $_SESSION['id']; ?> name="id">
                        </form>
                           <!-- <td> <button><i class="fa-solid fa-pen-to-square"></i></button> -->
                        </tr>
                        
                    </tbody>
                   
                    
			
    
            </div>
            
        </div>
    </body>
    
    </html>





