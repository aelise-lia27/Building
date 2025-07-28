<?php

require_once('./src/model/service.php');

function intrument(){

$ConstructionTools = getConstructionTools();

require_once('./templates/instrument.php');
}
