<?php
class Connect{
    private $server;
    private $username;
    private $password;
    private $basename;
    function __construct($server, $username, $password, $basename){
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->basename = $basename;
        $sql = new PDO('mysql:host='.$this->server.";dbname=".$this->basename, $this->username, $this->password);
        $sql->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $sql;
    }
}