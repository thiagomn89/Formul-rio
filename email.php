<?php

if(isset ($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']); 
$email = addslashes($_POST['email']); 
$mensagem = addslashes($_POST['message']); 

$to = 'thiagomagalhaes.oficial@gmail.com';
$subject = 'Contato Formulario';
$body = 'Nome: '.$nome. '\r\n';
        'Email: '.$email. '\r\n';
        'Mensagem' .$mensagem. '\r\n';

$header = 'From:thiagomagalhaes.oficial@gmail.com'.'\r\n'
            .'Reply-To:' .$email.'\r\n'
            .'X=Mailer:PHP/'.phpversion();

if(mail($to,$subject,$body,$header)){
    echo('Email enviado com sucesso!');

}else{ 
    echo('Email não pode ser enviado!');
}
}


?>