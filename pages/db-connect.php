<?php

class DBConnect {

    protected $db;

    public function connect() {

        try {

            $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=mydatabase';
            $user = 'root';
            $password = '';

            $this->db = new PDO( $dsn, $user, $password );

            return $this->db;
        } catch ( PDOException $e ) {

            echo 'PDO Error:  ' . $e->getMessage();
        }
    }
}