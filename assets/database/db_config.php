<?php
//class Database

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

use function PHPSTORM_META\map;

class Database
{
    //function for connection
    public function connect()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'account');
        return $conn;
    }
    //function for select data account dosen
    public function select_account_lecturer($username)
    {
        $conn = $this->connect();
        $select = mysqli_query($conn, "SELECT * FROM akun_dosen WHERE username = '$username'");
        return $select;
    }
    //function for select data account mahasiswa
    public function select_account_college_student($username)
    {
        $conn = $this->connect();
        $select = mysqli_query($conn, "SELECT * FROM akun_mahasiswa WHERE username = '$username'");
        return $select;
    }
    //function for select account admin
    public function select_admin($username)
    {
        $conn = $this->connect();
        $select = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
        return $select;
    }
    //function for select all data mahasiswa
    public function select_all_data_mahasiswa()
    {
        $conn = $this->connect();
        $select_all = mysqli_query($conn, "SELECT * FROM akun_mahasiswa");
        return $select_all;
    }
    //function for select all data dosen
    public function select_all_data_dosen()
    {
        $conn = $this->connect();
        $select_all = mysqli_query($conn, "SELECT * FROM akun_dosen");
        return $select_all;
    }
    //function for delete data mahasiswa
    public function delete_data_mahasiswa($username)
    {
        $conn = $this->connect();
        $delete_mahasiswa = mysqli_query($conn, "DELETE FROM akun_mahasiswa WHERE username = '$username'");
        return $delete_mahasiswa;
    }
    //function for add account mahasiswa
    public function add_mahasiswa($username, $password)
    {
        $conn = $this->connect();
        mysqli_query($conn, "INSERT INTO akun_mahasiswa VALUES('$username', '$password')");
    }
    //function for add account dosen
    public function add_dosen($username, $password)
    {
        $conn = $this->connect();
        mysqli_query($conn, "INSERT INTO akun_dosen VALUES('$username', '$password')");
    }
    //function for delete data mahasiswa
    public function delete_data_dosen($username)
    {
        $conn = $this->connect();
        $delete_dosen = mysqli_query($conn, "DELETE FROM akun_dosen WHERE username = '$username'");
        return $delete_dosen;
    }
    //function update data mahasiswa
    public function update_data_mahasiswa($username, $password)
    {
        $conn = $this->connect();
        $update = mysqli_query($conn, "UPDATE akun_mahasiswa SET password = '$password' WHERE username = '$username'");
        return $update;
    }
    //function update data dosen
    public function update_data_dosen($username, $password)
    {
        $conn = $this->connect();
        $update = mysqli_query($conn, "UPDATE akun_dosen SET password = '$password' WHERE username = '$username'");
        return $update;
    }
    //function view data admin
    public function view_data_admin()
    {
        $conn = $this->connect();
        $view = mysqli_query($conn, "SELECT * FROM admin");
        return $view;
    }
    //function data admin
    public function update_data_admin($username, $password)
    {
        $conn = $this->connect();
        $update = mysqli_query($conn, "UPDATE admin SET username = '$username', password = '$password'");
        return $update;
    }
}