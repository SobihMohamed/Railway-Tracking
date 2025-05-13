<?php
namespace App\Models;

use App\Database\DB;

class AdminTables{
  protected $db;
  protected $tableName;
  public function __construct($tableName){
    $this->tableName = $tableName;
    $this->db = new DB($this->tableName);
  }

  public function retriveData(){
    try{
      $data = $this->db
              ->select()
              ->fetchAll();
      return $data;
    }catch(\Exception $e){
      echo "Error : " . $e->getMessage();
    }
    return [];
  }

  public function getLastRowAdded(){
    $row = $this->db
                ->select()
                ->orderBy("id")
                ->getRow();
    return $row;
  }
  public function getOneRow($id){
    $row = $this->db
                ->select()
                ->where("id","=",$id)
                ->getRow();
    return $row;
  }
  public function retriveBookings()
{
    $columns = "bookings.id, bookings.user_id, bookings.ticketCode, bookings.seat_number, bookings.travel_date, bookings.status, bookings.platform_number,
                users.firstName AS user_name, users.email AS user_email,
                trains.id as train_id,trains.train_name, trains.departure_station, trains.arrival_station, trains.arrival_time, trains.departure_time, trains.train_class AS class";

    try {
        $data = $this->db
            ->select($columns)
            ->join('users', 'user_id', 'id')
            ->join('trains', 'train_id', 'id')
            ->orderBy("id")
            ->fetchAll();
            // echo "<pre/>";
            // print_r($data);
        return $data;
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}
  public function deleteData($id){
    try{
      $this ->db
            ->delete()
            ->where("id","=",$id)
            ->excute();
    }catch(\Exception $e){
      echo "Error : " . $e->getMessage();
    }
  }
  public function getEditedData($id){
    $user = $this ->db
          ->select()
          ->where("id","=",$id)
          ->getRow();
          return $user;
  }
  public function updateData($data){
    $id = (int) $_POST["id"];
    if($this->tableName === "bookings"){
      $allowedFields = [
        'seat_number',
        'platform_number',
        'travel_date',
        'class',
        'status'
      ];
      $data = array_filter(
        $data,
        fn($key) => in_array($key, $allowedFields),
        ARRAY_FILTER_USE_KEY
      );
    }
    try{
      $this ->db
            ->update($data)
            ->where("id","=",$id)
            ->excute();
    }catch(\Exception $e){
      echo "Error : " . $e->getMessage();
    }
  }
  public function addData($data){
    try{
      $this ->db
            ->insert($data)
            ->excute();
    }catch(\Exception $e){
      echo "Error : " . $e->getMessage();
    }
  }
}
?>