<?php

require_once 'page.php';
require_once 'request.php';
require_once 'client_request.php';
require_once 'libraries\articles\article.php';
require_once 'libraries\articles\page.php';

// dump request data
request::dump();

// render the entire page
$page = new page();
$page->render();

// render the client's request
$client_request = new client\request();
echo $client_request->getText();

// // prepare an article containing pages and render it
$article = new article\article('The greatest article there ever was');
$article->addPage(1);
$article->addPage(2);
$article->addPage(3);
$article->render();

require_once 'user_interface.php';
require_once 'facebook_user.php';