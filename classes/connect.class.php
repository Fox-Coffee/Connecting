<!--
    Connecting - A simple PHP program used to read and write in a database
    Copyright (C) 2023  Filip Kamieniecki

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
-->
<?php
class Connect{
    private $software;
    private $server;
    private $username;
    private $password;
    private $basename;
    public $sql;
    public function __construct($software, $server, $username, $password, $basename){
        try{
            $this->software = $software;
            $this->server = $server;
            $this->username = $username;
            $this->password = $password;
            $this->basename = $basename;
            $this->sql = new PDO($this->software.':host='.$this->server.";dbname=".$this->basename, $this->username, $this->password);
            $this->sql->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            header('Location: error.html');
        }
    }
    public function __destruct(){
        $this->sql=null;
    }
}