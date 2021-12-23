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

    public function insert($table, $parameter)
    {

        // $statement->excute(['name' => 'Joe', 'email'=> 'joe@example.com']);

        $sql = sprintf(
            'insert into %s (%s) values(%s)',
            $table,
            implode(',', array_keys($parameter)),
            ':' . implode(', :', array_keys($parameter))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameter);
            
        } catch (Exception $e) {
            die('Whoops something went wrong');
        }
    }
}
