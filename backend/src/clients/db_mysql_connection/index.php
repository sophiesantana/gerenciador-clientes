<?php
  class ConnectDB {
    private $server_name;
    private $user_name;
    private $password;
    private $db_name;

    public function __construct()
    {
      $parsed = @parse_ini_file('.env');

      if ($parsed === false) {
          die('Error parsing .env file');
      }

      $this->server_name = $parsed['DB_SERVER'];
      $this->user_name = $parsed['DB_USER'];
      $this->password = $parsed['DB_PASSWORD'];
      $this->db_name = $parsed['DB_NAME'];

      $conn = mysqli_connect($this->server_name, $this->user_name, $this->password, $this->db_name);

      if (!$conn) {
        echo 'Connection failed ';
      } else {
        echo 'Connected to database mysql sophie/learn';
        echo "\n";
        return $conn;
      }
    }
  }
?>