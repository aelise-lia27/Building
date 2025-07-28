<?php

require_once('./src/model/service.php');

function affordableHouse () {

$AffordableHouses = getAffordableHouses();

require_once('./templates/sub-service2.php');

}

