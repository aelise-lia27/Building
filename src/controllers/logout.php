<?php
require_once('./src/model/logout.php');
function logout(){
// Supprimer le token en base
coockieDelete();
session_unset();
session_destroy();
header('Location: /index.php');
exit;
}