<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="author" content="Vitor Visconti">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style3.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-utilities.min.css" rel="stylesheet" type="text/css">
<page>

  <head>
    <div id="head">
      <div class="logo">
        <h1><span></span></h1>
      </div>
    </div>
  </head>
  <body>
    <div class="form-cadastro">
      
          <form method="POST" action="" id="form-cadastro" name="form-cadastro">
          <?php

          if( isset( $_POST['enviar']) ){
              //Verificando se os campos indicados foram preenchidos 
              if( !empty($_POST['adotante']) && !empty($_POST['doador'])){
                  
                  //pegar os valores preenchidos nos campos do formulario
                  $adotante         = $_POST['adotante'];
                  $doador           = $_POST['doador'];
                  $tipodeanimal      = $_POST['tipodeanimal'];
                  $nomedoanimal       = $_POST['nomedoanimal'];
                  $idadedoanimal   = $_POST['idadedoanimal'];
                       
                  /*Rotinas para utilizacao de banco de dados*/
                  include "connect.php";
                  
                  
                  //Exercicio 01: montar a consulta SQL
                  $sql = "INSERT INTO tbadotante (idAdotante)";
                  $sql .= "VALUES( '{$adotante}')";
                  $sql2 = "INSERT INTO tbdoador (idDoador)";
                  $sql2 .= "VALUES( '{$doador}')";
                  $sql3 = "INSERT INTO tbmeupet (tipodeanimal, nomedoanimal, idadedoanimal)";
                  $sql3 .= "VALUES( '{$tipodeanimal}', '{$nomedoanimal}', '{$idadedoanimal}')";
                  
                  /*/echo $sql,$sql2,$sql3; */
                  
                  //Exercicio 02: executar a consulta montada 
                  
                  mysqli_query( $conn, $sql) or die(mysqli_error($conn));
                  mysqli_query( $conn, $sql2) or die(mysqli_error($conn));
                  mysqli_query( $conn, $sql3) or die(mysqli_error($conn));
                  echo "Dados cadastrados com sucesso!<br>";
             
              } else {
                if( !empty($_POST['adotante']) && empty($_POST['doador'])){
                 $adotante         = $_POST['adotante'];
                  $tipodeanimal      = $_POST['tipodeanimal'];
                  $nomedoanimal       = $_POST['nomedoanimal'];
                  $idadedoanimal   = $_POST['idadedoanimal'];
                       
                  /*Rotinas para utilizacao de banco de dados*/
                  include "connect.php";
                  
                  
                  //Exercicio 01: montar a consulta SQL
                  $sql = "INSERT INTO tbadotante (idAdotante)";
                  $sql .= "VALUES( '{$adotante}')";
                  $sql3 = "INSERT INTO tbmeupet (tipodeanimal, nomedoanimal, idadedoanimal)";
                  $sql3 .= "VALUES( '{$tipodeanimal}', '{$nomedoanimal}', '{$idadedoanimal}')";
                  
                  /*/echo $sql,$sql3;*/
                  
                  //Exercicio 02: executar a consulta montada 
                  
                  mysqli_query( $conn,$sql) or die(mysqli_error($conn));
                  mysqli_query( $conn,$sql3) or die(mysqli_error($conn));
                  echo "Dados cadastrados com sucesso!<br>";

                } else if (empty($_POST['adotante']) && !empty($_POST['doador'])){
                  $doador           = $_POST['doador'];
                  $tipodeanimal      = $_POST['tipodeanimal'];
                  $nomedoanimal       = $_POST['nomedoanimal'];
                  $idadedoanimal   = $_POST['idadedoanimal'];
                       
                  /*Rotinas para utilizacao de banco de dados*/
                  include "connect.php";
                  
                  
                  //Exercicio 01: montar a consulta SQL
                 $sql2 = "INSERT INTO tbdoador (idDoador)";
                 $sql2 .= "VALUES( '{$doador}')";
                  $sql3 = "INSERT INTO tbmeupet (tipodeanimal, nomedoanimal, idadedoanimal)";
                  $sql3 .= "VALUES( '{$tipodeanimal}', '{$nomedoanimal}', '{$idadedoanimal}')";
                  
                  /*echo $sql2,$sql3; */
                  
                  //Exercicio 02: executar a consulta montada 
                  
                  mysqli_query( $conn,$sql2) or die(mysqli_error($conn));
                  mysqli_query( $conn,$sql3) or die(mysqli_error($conn));
                  echo "Dados cadastrados com sucesso!<br>";
                
                } else {


                echo "Preencha os campos obrigatórios: adotante/doador<br>";
               
              }
              
          }} 
          
          include "connect.php";
         


                                    
                  //Exercicio 01: montar a consulta SQL
        /*    
        $sql = "SELECT * FROM tblogin ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $row2 = $row ['Nome'];
        */
        ?>


        <p style="color:#2e5984 "><br>Bem-vindo, <?php echo $_SESSION["usuario"]?> . Agora é hora de você nos dizer se vai adotar ou doar um animal! E dar
        os dados do bichinho!</p>
      
        
          
          
                       <legend>Informações de usuário e animal</legend>
                    <p class="vocee">
                    
                          <label id="vc" name="vc" for="vc" >Você é:</label>
                          <input type="radio" id="adotante" name="adotante" value="*">
                          <label for="html">Adotante</label>
                          <input type="radio" id="doador" name="doador" value="*">
                          <label for="css">Doador</label>
                     </p>

                    <p class="tipodeanimal">
                     <label>Tipo de animal: </label>
                        <input class="field1" type="text" name="tipodeanimal" id="tipodeanimal" value="">
                    </p>
                    <p class="nomedoanimal">
                      <label>Nome do animal: </label>
                        <input class="field1" type="text" name="nomedoanimal" id="nomedoanimal" value="">
                     </p>          
                    <p class="idadedoanimal">
                      <label>Idade do animal: </label>
                        <input class="field1" type="text" name="idadedoanimal" id="idadedoanimal" value="">
                    </p>  
                
                      <p class= "videosefoto">
                      <label for="myfile">Escolha as fotos do bichinho/suas fotos:</label>
                      <input type="file" id="myfile" name="myfile"><br><br>
                      <label for="myfile">Escolha os vídeos do bichinho/seu vídeo:</label>
                      <input type="file" id="myfile" name="myfile"><br><br>
                      
                    </p>
                    <div id="buttonbox"><input type="submit" id="enviar" name="enviar" value="Enviar"></div>
             
      </form>
</body>
