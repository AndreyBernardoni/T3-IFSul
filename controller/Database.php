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

    function search($local)
    {
        $this->connect();

        $sql = "SELECT * FROM `tb_compromisso` WHERE `txt_local` = '$local'";

        $result = mysqli_query($this->conn, $sql);

        if (!$result) {
            die(mysqli_error($this->conn));
            return false;
        }

        $compromissos = array();

        while ($dados = mysqli_fetch_array($result)) {
            $compromissos[] = $dados;
        }

        return $compromissos;
    }

    function update($id, $data, $local, $hora, ?String $descricao)
    {
        $this->connect();

        $sql = "UPDATE `tb_compromisso` SET `dt_data`='$data',`txt_local`='$local',`hr_hora`='$hora',`txt_descricao`='$descricao' WHERE `id`='$id'";

        $result = mysqli_query($this->conn, $sql);

        if (!$result) {
            die(mysqli_error($this->conn));
            return false;
        }

        return true;
    }
}
