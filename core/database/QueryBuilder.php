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

    public function selectOne($id, $table)
    {   
        
        $statement = $this->pdo->prepare("select * from $table where id = $id");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ) ;
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

    public function update($dataArr, $table)
    {
        $cols = array_keys($dataArr);
        $values = array_values($dataArr);
        $changedata = "";
        foreach($cols as $q){
            if($q != "id"){
                $changedata .=  "$q = ?,";
            }
        }
        $changedata = rtrim($changedata, ',');
        $sql = "update $table set $changedata where id  = ?";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($values);
    }


    public function delete($id, $table)     
    {
        $sql = "delete from $table where id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$id]);
    }
}