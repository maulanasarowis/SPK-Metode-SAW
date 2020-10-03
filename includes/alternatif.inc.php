<?php
class Alternatif{
	
	private $conn;
	private $table_name = "alternatif";
	
	public $id;
	public $nama;
	public $jk;
	public $alamat;
	public $telepon;
	public $email;
	public $jm;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values('',?,?,?,?,?,'')";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->nama);
		$stmt->bindParam(2, $this->jk);
		$stmt->bindParam(3, $this->alamat);
		$stmt->bindParam(4, $this->telepon);
		$stmt->bindParam(5, $this->email);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY hasil_alternatif DESC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	// used when filling up the update product form
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE id_alternatif=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id = $row['id_alternatif'];
		$this->nama = $row['nama_alternatif'];
		$this->jk = $row['jk'];
		$this->alamat = $row['alamat'];
		$this->telepon = $row['telepon'];
		$this->email = $row['email'];
	}
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nama_alternatif = :nama,
					jk = :jk,
					alamat = :alamat,
					telepon = :telepon,
					email = :email
				WHERE
					id_alternatif = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nama', $this->nama);
		$stmt->bindParam(':jk', $this->jk);
		$stmt->bindParam(':alamat', $this->alamat);
		$stmt->bindParam(':telepon', $this->telepon);
		$stmt->bindParam(':email', $this->email);

		$stmt->bindParam(':id', $this->id);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_alternatif = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>