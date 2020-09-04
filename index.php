<!DOCTYPE html>
  <html>
    <head>
      <title>Exercicio Estagio Tech</title>
      <link href="style.css" rel="stylesheet">
    </head>
    <body>
      <h1>Exercicio Estagio Tech</h1>

      <nav class="principal">
              <ul>
                <li>
                  <a href="#Exercicio_1">Exercicio 1</a>
                </li>
                <li>
                  <a href="#Exercicio_2">Exercicio 2</a>
                </li>
                <li>
                  <a href="#Exercicio_3">Exercicio 3</a>
                </li>
                <li>
                  <a href="#Exercicio_4">Exercicio 4</a>
                </li>
                <li>
                  <a href="#Exercicio_5">Exercicio 5</a>
                </li>
              </ul>

      </nav>
      <br>   
<section>
        <section id="Exercicio_1">
        <h4 class="titulo-vermelho"> Exercicio 1 </h4> 
        <form name="exer1">
          <label for="usuario"> Qual o usuário? </label>
          <input id="usuario" type="text">
          
          <label for="resultado"> Qual o curso? </label>
          <input type="text" id="resultado" disabled="disabled"  />
       
          <button id="botaoEnviar">User</button>
          <button id="botaoCurso">Curso</button>
        </form>
<?
      

?>
         <br>
</section>
<section id="Exercicio_2">
  <h4 class="titulo-verde"> Exercicio 2 </h4> 
  <img src="img/resposta2.png" alt="Resposta do exercicio dois de modelagem">


<section>

  <section id="Exercicio_3">
    <h4 class="titulo-amarelo"> Exercicio 3 </h4> 
   

<?php
$link = mysqli_connect("localhost", "root", "", "test");
 
$colunas = array();
$selectColunas = mysqli_query(
    $link,
    "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'test' AND TABLE_NAME = 'usuario';"
); 
while($coluna = mysqli_fetch_assoc($selectColunas)){
    array_push($colunas, $coluna['COLUMN_NAME']) ;
}

print_r($colunas);
echo '<br>';
$colunas2 =array();
$selectColunas2 = mysqli_query(
  $link,
  "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'test' AND TABLE_NAME = 'compra';"
); 
while($coluna2 = mysqli_fetch_assoc($selectColunas2)){
  array_push($colunas2, $coluna2['COLUMN_NAME']) ;
}

print_r($colunas2);

echo '<br>';

$colunas3 =array();
$selectColunas3 = mysqli_query(
  $link,
  "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'test' AND TABLE_NAME = 'carrinho';"
); 
while($coluna3 = mysqli_fetch_assoc($selectColunas3)){
  array_push($colunas3, $coluna3['COLUMN_NAME']) ;
}

print_r($colunas3);
?>
  </section>

    <section id="Exercicio_4">
      <h4 class="titulo-azul"> Exercicio 4 </h4> 
    
     
    </section>

      <section id="Exercicio_5">
        <h4> Exercicio 5</h4> 
        <button id="btn1">teste</button>
      </section>
  </section>      
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    
      <script type="text/javascript" src="JS/script.js"></script>
      <script type="text/javascript" src="json/objeto.json"></script>
   </body> 
 </html>