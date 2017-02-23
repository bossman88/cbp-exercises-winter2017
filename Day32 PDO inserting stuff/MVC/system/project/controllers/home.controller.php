<?php

//$tasks = new view('home/tasks');
//$tasks->tasks = Task_Model::getTasks();

$page_layout = new view('home/page_layout');
$page_layout->games = $games;

// set thte title of the page
presenter::setTitle('Homepage');

// give the layout to the presenter to present
presenter::present($page_layout);
