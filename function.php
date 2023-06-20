<?php
    $conn = mysqli_connect("localhost", "root", "", "pr_masjid");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $kotaks = [];
        while ($kotak = mysqli_fetch_assoc($result)) {
            $kotaks[] = $kotak;
        }
        return $kotaks;
    }

    function tambahData($data) {
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $id_donatur = htmlspecialchars($data["id_donatur"]);
        $paket = htmlspecialchars($data["paket"]);
        $kategori = htmlspecialchars($data["kategori"]);
        $nominal = htmlspecialchars($data["nominal"]);
        $bukti = htmlspecialchars($data["bukti"]);

        $query = "INSERT INTO masjid (nama, id_donatur, paket, kategori, nominal, bukti)
                VALUES ('$nama', '$id_donatur', '$paket', '$kategori', '$nominal', '$bukti')";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    class Prosses {
        protected $host = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $database = "pr_masjid";
        public $targetDana = 40000000;
        private $conn;

        public function __construct() {
            $this->conn=mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if (mysqli_connect_errno()) {
                echo "Koneksi database gagal: " . mysqli_connect_error();
            }
        }
    
        public function target()
        {
            return $this->targetDana;
        }
    
        public function totalNominal()
        {
            $sql = $this->conn->prepare("SELECT SUM(nominal) AS jumlah FROM masjid");
            $sql->execute();
            $result = $sql->get_result();
            $row = $result->fetch_assoc();
            return $row;
        }
        
    
        public function totalDonatur()
        {
            $stmt = $this->conn->prepare("SELECT * FROM masjid");
            $stmt->execute();
            $result = $stmt->get_result();
            $total = $result->num_rows;
            return $total;
        }
    
        public function persentase()
        {
            $tnom = $this->totalNominal();
            $persen = ($tnom['jumlah'] / $this->targetDana) * 100;
            return $persen;
        }
    }
        

?>
