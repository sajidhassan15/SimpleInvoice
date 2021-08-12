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
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectId($table, $id)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id={$id}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function getData($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertData($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        // die($sql);
        try {
            $statement = $this->pdo->prepare($sql);
            foreach ($parameters as $key => &$val) {
                $statement->bindParam($key, $val);
            }

            $statement->execute($parameters);
        } catch (Exception $e) {
            die("something is wrong.. $e");
        }
    }

    public function deleteData($table, $parameters)
    {
        $sql = sprintf(
            'delete from %s where (%s)=(%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            foreach ($parameters as $key => &$val) {
                $statement->bindParam($key, $val);
            }

            $statement->execute($parameters);
        } catch (Exception $e) {
            die("something is wrong");
        }
    }

    public function updateData($table, $condition_arr, $where_field, $where_value)
    {
        if ($condition_arr != '') {
            $sql = " update $table set ";

            $c = count($condition_arr);
            $i = 1;
            foreach ($condition_arr as $key => $val) {
                if ($i == $c) {
                    $sql .= " $key= '$val' ";
                } else {
                    $sql .= " $key= '$val', ";
                }
                $i++;
            }
            $sql .= " where $where_field='$where_value' ";
            try {
                $statement = $this->pdo->prepare($sql);
                foreach ($condition_arr as $key => &$val) {
                    $statement->bindParam($key, $val);
                }

                $statement->execute($statement);
            } catch (Exception $e) {
                die("something is wrong");
            }
        }
    }
}