<?php

namespace model;

use model\BaseModel;

class Data extends BaseModel {

    private $id_data, $nama, $waktu, $materi, $nilai, $rapi;

    public function __construct($id_data, $nama, $waktu, $materi, $nilai, $rapi) {
        $this->id_data = $id_data;
        $this->nama = $nama;
        $this->waktu = $waktu;
        $this->materi = $materi;
        $this->nilai = $nilai;
        $this->rapi = $rapi;
    }

    public function setIdData($id_data) {
        $this->id_data = $id_data;
    }

    public function getIdData() {
        return $this->id_data;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setWaktu($waktu) {
        $this->waktu = $waktu;
    }

    public function getWaktu() {
        return $this->waktu;
    }

    public function setMateri($Materi) {
        $this->materi = $materi;
    }

    public function getMateri() {
        return $this->materi;
    }
    
    public function setNilai($nilai) {
        $this->nilai = $nilai;
    }

    public function getNilai() {
        return $this->nilai;
    }
    
    public function setRapi($rapi) {
        $this->rapi = $rapi;
    }
    
    public function getRapi() {
        return $this->rapi;
    }

    public static function getAll() {
        $query = "SELECT * FROM tbl_data ORDER BY id";
        $stmt = self::getDB()->prepare($query);
        $stmt->execute();

        $result = array();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            array_push($result, 
                new Data($row['id'], $row['nama'], $row['waktu'], $row['materi'], $row['nilai'], $row['rapi']));
        }
        return $result;
    }
    
    public static function getOne($id) {
        $query = "SELECT * FROM tbl_data WHERE id = :id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return new Data($result['id'], $result['nama'], $result['waktu'], $result['materi'], $result['nilai'], $result['rapi']);
    }

    public static function getLastInsertedId() {
        $query = "SELECT id FROM tbl_data ORDER BY id DESC LIMIT 1";
        $stmt = self::getDB()->prepare($query);
        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $result['id'];
    }
    
    public static function insert($data) {
        $query = "INSERT INTO tbl_data(nama, waktu, materi, nilai, rapi) VALUES (:nama, :waktu, :materi, :nilai, :rapi)";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':nama', $data['nama']);
        $stmt->bindValue(':waktu', $data['waktu']);
        $stmt->bindValue(':materi', $data['materi']);
        $stmt->bindValue(':nilai', $data['nilai']);
        $stmt->bindValue(':rapi', $data['rapi']);
        
        return $stmt->execute();
    }

    public static function update($id, $data) {
        $query = "UPDATE tbl_data SET nama = :nama, waktu = :waktu, materi = :materi, nilai = :nilai, rapi = :rapi WHERE id = :id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':nama', $data['nama']);
        $stmt->bindValue(':waktu', $data['waktu']);
        $stmt->bindValue(':materi', $data['materi']);
        $stmt->bindValue(':nilai', $data['nilai']);
        $stmt->bindValue(':rapi', $data['rapi']);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }

    public static function delete($id) {
        $query = "DELETE FROM tbl_data WHERE id = :id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
}