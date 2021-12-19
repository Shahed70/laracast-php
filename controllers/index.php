<?php

$allTodos = $app['database']->selectAll('todolist');


require 'views/index.view.php';

