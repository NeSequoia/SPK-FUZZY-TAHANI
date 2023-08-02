<?php

namespace model;

use model\BaseModel;

class Hasil extends BaseModel {

    private $id_hasil, $id_himpunan, $id_hasil_dosen, $f;

    public function __construct($id_hasil, $id_himpunan, $id_hasil_dosen, $f) {
        $this->id_hasil = $id_hasil;
        $this->id_himpunan = $id_himpunan;
        $this->id_hasil_dosen = $id_hasil_dosen;
        $this->f = $f;
    }

    public function setIdHasil($id_hasil) {
        $this->id_hasil = $id_hasil;
    }

    public function getIdHasil() {
        return $this->id_hasil;
    }

    public function setIdHimpunan($id_himpunan) {
        $this->id_himpunan = $id_himpunan;
    }

    public function getIdHimpunan() {
        return $this->id_himpunan;
    }
    
    public function setIdHasilDosen($id_hasil_dosen) {
        $this->id_hasil_dosen = $id_hasil_dosen;
    }

    public function getIdHasilDosen() {
        return $this->id_hasil_dosen;
    }
    
    public function setF($f) {
        $this->f = $f;
    }

    public function getF() {
        return $this->f;
    }

    public static function getByIdHasilDosen($id) {
        $query = "SELECT * FROM hasil_fuzzy WHERE id_hasil_dosen = :id_hasil_dosen ORDER BY id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id_hasil_dosen', $id);
        $stmt->execute();
        $result = array();
        
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            array_push($result, 
            new Hasil($row['id'], $row['id_himpunan'], $row['id_hasil_dosen'], $row['f']));
        }

        return $result;
    }

    public static function getMaxFById($id) {
        $id_range = [[1, 2], [3, 5], [6, 8], [9, 10]];

        $max = array();
        for ($i = 0; $i < count($id_range); $i++) {
            $batasBawah = $id_range[$i][0];
            $batasAtas = $id_range[$i][1];
            $query = "SELECT id_himpunan FROM hasil_fuzzy WHERE id_himpunan >= $batasBawah AND id_himpunan <= $batasAtas AND id_hasil_dosen = :id_hasil_dosen ORDER BY f DESC LIMIT 1";
            $stmt = self::getDB()->prepare($query);
            $stmt->bindValue(':id_hasil_dosen', $id);
            $stmt->execute();

            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            array_push($max, $result['id_himpunan']);
        }

        return $max;
    }

    public static function insert($data) {
        $query = "INSERT INTO hasil_fuzzy(id_himpunan, id_hasil_dosen, f) VALUES (:id_himpunan, :id_hasil_dosen, :f)";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id_himpunan', $data['id_himpunan']);
        $stmt->bindValue(':id_hasil_dosen', $data['id_hasil_dosen']);
        $stmt->bindValue(':f', $data['f']);

        return $stmt->execute();
    }

    public static function delete($id) {
        $query = "DELETE FROM hasil_fuzzy WHERE id_hasil_dosen = :id";
        $stmt = self::getDB()->prepare($query);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }

}