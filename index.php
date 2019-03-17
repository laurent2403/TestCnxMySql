<?php  
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=db_test;charset=utf8', 'test_user', 'test@user');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * from T_USER_USR');
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Test de connexion</title> 
               <script src="js/jquery.js"></script>
               <script src="js/bootstrap.min.js"></script>
                <link href="css/bootstrap.min.css" rel="stylesheet">
      </head>  
      <body>  
           
           <div class="container">  
                <h3 align="center">Test de connexion à une base de données MySql</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="user_data" class="table table-dark">  
                          <thead>  
                               <tr>  
                                    <td>LOGIN</td>  
                                    <td>DESRIPTION</td>  
                                    <td>PROFIL</td>  
                                    <td>TYPE</td>  
                                    <td>PASSWORD</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while ($donnees = $reponse->fetch())  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$donnees["USR_LOGIN"].'</td>  
                                    <td>'.$donnees["USR_DESCRIPTION"].'</td>  
                                    <td>'.$donnees["USR_PROFIL"].'</td>  
                                    <td>'.$donnees["USR_TYPE"].'</td>  
                                    <td>'.$donnees["USR_PASSWORD"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  

