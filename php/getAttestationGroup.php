<?php

$iQuotationId = $_REQUEST['iQuotationId'];
$iPos = $_REQUEST['iPos'];

require_once('./attestationToolBox.php');
chooseDb($_REQUEST['sDatabase']);

getAttestationGroupId($iQuotationId, $iPos);