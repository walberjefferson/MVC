<?php

namespace SON\Db;


abstract class Table
{
    protected $db;
    protected $table;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "SELECT * FROM {$this->table}";
        return $this->db->query($query);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $res = $stmt->fetch();

        return $res;
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE id=:id");
        $stmt->bindParam(":id",$id);
        return $stmt->execute();
    }
}