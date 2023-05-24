<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="author" content="Vitor Visconti">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style2.css" rel="stylesheet" type="text/css" media="screen">
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
      <form method="POST" action="" id="form-cadastro">
        <fieldset id="cadastro-usuario">
          <div id="boxtotal">
          <?php
          if( isset( $_POST['cadastrar']) ){
              //Verificando se os campos indicados foram preenchidos 
              
                  
                  //pegar os valores preenchidos nos campos do formulario
                  $usuario         = $_POST['usuario'];
                  $email           = $_POST['email'];
                  $senha         = $_POST['senha'];
                  $confirmacaosenha      = $_POST['confirmacao-senha'];
                  $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
                  $hashed_passwordconf = password_hash($confirmacaosenha, PASSWORD_DEFAULT);
                  $id = "";
                       
                  /*Rotinas para utilizacao de banco de dados*/
                  include "connect.php";
                       
                  //Exercicio 01: montar a consulta SQL
                  $sql = "INSERT INTO tbusuario (Nome,email,senha,confirmacaosenha)" ;
                  $sql .= "VALUES( '{$usuario}', '{$email}','{$hashed_password}','{$confirmacaosenha}')";
                  $sql2 = "INSERT INTO tblogin (Nome,email,senha,id)" ;
                  $sql2 .= "VALUES( '{$usuario}', '{$email}','{$hashed_password}','{$id}')";

                  $_SESSION["usuario"] = $usuario; 
                  /*echo $sql;*/
                  
                  $sql3 = "SELECT * FROM tbusuario WHERE email= '$email'";

                  $result = mysqli_query($conn, $sql3);
                
                 if (mysqli_num_rows($result) > 0) { ?>
                  <p style= "color:#f00";>Email já existe. Experimente outro!</p>
                  
                  <?php
                 } else 
                  
                  if ($usuario !== "" && $email !== "" && $senha === $confirmacaosenha)
                  {

                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    mysqli_query($conn, $sql2) or die(mysqli_error($conn));

                    ?>
                    <p style= "color:rgb(63, 191, 89)";>Usuário registrado!</p>
                    
                    <?php
                   }
                   else {
                    ?>
                  <p style= "color:#f00";>Senhas não se correspondem ou campos não foram preenchidos!</p>
                  
                  <?php
                  }

                }
                 ?>                  
                  
            <div id="titulo">
          <h2>Cadastro de usuário</h2>
          </div>
          
          <div class="usuario">
            <label>Nome de Usuário:</label> <input class="field1" type="text" name="usuario" id="usuario">
          </div>
          <div class="email">
            <label>Email:</label> <input class="field1" type="text" name="email" id="email">
            <p id="result" ></p>
          </div>        
          <div class="senha">
            <div><label>Senha:</label> <input class="field1" type="password" minlength="8" id="senha" name="senha"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Deve conter uma letra maiúscula, uma minúscula, um número e no mínimo 8 caracteres"
                required></div>

            <div id="caixamsg">
              <p id="maiuscula" class="invalid"> &nbsp1 letra <b>maiúscula</b></p>
              <p id="minuscula" class="invalid">&nbsp1 letra <b>minúscula</b></p>
                <p id="numero" class="invalid"><b>1 número</b></p>
              <p id="letras" class="invalid"><b>8 caracteres</b></p>
              </div>
            

          </div>
          <div class="confirmacao-senha">
            <label>Confirmação de senha:</label> <input class="field1" type="password" minlength="8" name="confirmacao-senha"
                id="confirmacao-senha">
          </div>
       

    <!-- Button trigger modal -->
    <div class="buttontec">
      <button id="button" type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#exampleModalLong">
        Ler termos e condições
      </button>
    </div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Termos e condições</h5>
          </div>
          <div class="modal-body">
            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget
            quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
            rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget
            quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
            rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget
            quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
            rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget
            quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
            rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget
            quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
            rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget
            quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
            rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
            consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="boxtermosservico">
    <fieldset id="termosservico">
      <label class="termosservico">Li e concordo com os termos do serviço <input id="termosservicobox"
          type="checkbox" name="check"></label> 
            </div>
            <div id="cadastro">
            <a id="click"><input id="enviarformulario" type="submit" value="Cadastrar" name="cadastrar" ></a>
            </div>
            <a id="linklog" href="login.php">Voltar para login</a>
    </fieldset>
            
    </div>
    
    </fieldset>
    
    </form>
  </div>

    
  </body>
  <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/cadastro.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
      // When the user scrolls down 20px from the top of the document, slide down the navbar
      window.onscroll = function () { scrollFunction() };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("navbar").style.top = "0";
        } else {
          document.getElementById("navbar").style.top = "-50px";
        }
      }
    </script>

</html>