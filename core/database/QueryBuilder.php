<?php

class QueryBuilder{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo ;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($dataArr, $table)
    {
        $cols = implode(",",array_keys($dataArr));
        $values = array_values($dataArr);

        $questionLoop = array_keys($dataArr);
        $questionMark = "";

        foreach($questionLoop as $question){
            $questionMark .= "?,";
        }
        $questionMark = rtrim($questionMark, ",");
        
        $statement = $this->pdo->prepare("insert into $table ($cols) values ($questionMark)");
        $statement->execute($values);
    }
}