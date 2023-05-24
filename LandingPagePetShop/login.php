<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="author" content="Vitor Visconti">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style2alt.css" rel="stylesheet" type="text/css" media="screen">
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
                  $email           = $_POST['email'];
                  $senha         = $_POST['senha'];
                       
                  /*Rotinas para utilizacao de banco de dados*/
                  include "connect.php";
                                    
                  //Exercicio 01: montar a consulta SQL
            
        $sql = "SELECT * FROM tbusuario WHERE email= '$email' AND confirmacaosenha='$senha'";

    $result = mysqli_query($conn, $sql);
                
    if (mysqli_num_rows($result) > 0) {
        //user found in database
        echo "Login efetuado!";
        header('Location: informacoes.php');
        exit();
      } else {
        //user not found in database
        ?>
        <p style= "color:#f00";>Senhas ou email incorretos!</p>
        
        <?php
      }
      
      mysqli_close($conn);
          }
                 ?> 
            <div id="titulo">
          <h2>Login</h2>
          </div>         
          <div class="usuario">
            <label>Email:</label> <input class="field1" type="text" name="email" id="email">
          </div>
          <div class="email">
            <label>Senha:</label> <input class="field1" type="password" name="senha" id="senha">
          </div>     
          <div id="cadastro">
            <input id="enviarformulario" type="submit" value="Login" name="cadastrar" >
            </div>
           <a id="linkcadastro" href="cadastro.php">Não está registrado?Cadastre-se já!</a>

          </div>   
    </fieldset>
    
    </form>
    </div>
    
  </body>
  <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
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