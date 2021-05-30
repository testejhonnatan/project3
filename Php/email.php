<?php
  //Variáveis
  $nome = $_POST['nome'];
  $num = $_POST['num'];
  $cidade = $_POST['cidade'];
  $valor = $_POST['valor'];
  $orgao = $_POST['orgao'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>Numero: </b>$num</p>
      <p><b>Cidade: </b>$cidade</p>
      <p><b>Valor desejado: </b>$valor</p>
      <p><b>Orgao: </b>$orgao</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "jhonnatancesar17@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?>