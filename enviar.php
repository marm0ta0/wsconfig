<?php

$to = 'victor@confignetwork.com';
$subject = 'teste assunto';
$message = 'teste mensagem';

if (mail($to, $subject, $message,)){
    echo 'enviado';
}else{
    echo 'falha';
}