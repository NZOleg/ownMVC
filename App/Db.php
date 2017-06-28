<?php

namespace App;


class Db
{
    use Singleton;
    protected $dbh;
    protected function __construct()
    {
        //local machine's username and password
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
    }
    public function execute($sql){
        $sth = $this->dbh->prepare($sql);
        $res=$sth->execute();
        return $res;
    }
    public function query($sql, $class){
        $sth = $this->dbh->prepare($sql);
        $res=$sth->execute();
        if (false !== $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}