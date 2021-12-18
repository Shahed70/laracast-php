<?php

$query = require 'bootstrap.php';


 $allTodos = $query->selectAll('todolist');


 require "index.view.php";




