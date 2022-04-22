<?php

class Database
{
    function Database($user, $pass, $db, $host)
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->host = $host;
    }

    function connect()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$this->conn) {
            die(mysqli_connect_errno());
            echo "<h1>Ocorreu um erro na conexão com o banco de dados.</h1>";
        }
    }

    function insert($data, $local, $hora, ?String $descricao)
    {
        $this->connect();

        if ($descricao == null) {
            $sql = "INSERT INTO `tb_compromisso`(`dt_data`, `txt_local`, `hr_hora`) VALUES ('$data', '$local', '$hora')";
        } else {
            $sql = "INSERT INTO `tb_compromisso`(`dt_data`, `txt_local`, `hr_hora`, `txt_descricao`) VALUES ('$data', '$local', '$hora', '$descricao')";
        }

        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            die(mysqli_error($this->conn));
            return false;
        }

        return true;
    }
}
