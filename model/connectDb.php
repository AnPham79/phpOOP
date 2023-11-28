<?php
    class Connect {
        private $server = 'localhost';
        private $user = 'root';
        private $password = '';
        private $db = 'mvc_oop_lmao';

        public $linkdb;
        public $error;

        public function __construct() {
            $this->connectdb();
        }

        public function connectdb() {
            $this->linkdb = mysqli_connect($this->server, $this->user, $this->password, $this->db);
            mysqli_set_charset($this->linkdb, 'utf8');
            if(!$this->linkdb) {
                $this->error = 'không thể kết nối tới database của bạn';
                return false;
            }  else {
                return $this->linkdb;
            }
        }

        public function selectSQL($sql) {
            $connect = $this->connectdb();
        
            if ($connect) {
                $result = mysqli_query($connect, $sql);
                mysqli_close($connect);
                return $result;
            } else {
                return false;
            }
        }        
    }
?>