<?php


class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $allTodos = $this->pdo->prepare("SELECT * FROM {$table}");
        $allTodos->execute();
        return $allTodos->fetchAll(PDO::FETCH_CLASS);
    }
}
