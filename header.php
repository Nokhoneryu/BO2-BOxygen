<?php

// CONFIGURAÇÕES
include "configuration.php";
include "connect.php";

// CLASSES
include "class/class.article.php";
include "class/class.cart.php";
include "class/class.category.php";
include "class/class.GibberishAES.php";
include "class/class.history.php";
include "class/class.newsletter.php";
include "class/class.order.php";
include "class/class.product.php";
include "class/class.search.php";
include "class/class.user.php";
include "class/class.vcard.php";

//PHPMailer
include "class/PHPMailer/class.phpmailer.php";

// OUTROS
include "functions.php";

$language = parse_ini_file(
	sprintf("languages/%s.ini", $configuration["language"]),
	true
);
