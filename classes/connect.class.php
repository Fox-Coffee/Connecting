<?php
class Connect{
    private $software;
    private $server;
    private $username;
    private $password;
    private $basename;
    public $sql;
    private function __construct($software, $server, $username, $password, $basename){
        try{
            $this->$software = $software;
            $this->server = $server;
            $this->username = $username;
            $this->password = $password;
            $this->basename = $basename;
            $this->sql = new PDO($software.':host='.$this->server.";dbname=".$this->basename, $this->username, $this->password);
            $this->sql->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            header('Location: error.html');
        }
    }
    private function __destruct(){
        $this->sql=null;
    }
}