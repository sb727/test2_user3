<?php
include_once("Hotels.php");
// include_once("dbconnection.php");

class Model {
    public function dbConnection(){
        $conn = mysqli_connect("localhost","root","","mvc");
        if(!$conn)
             echo "connection failed";
        else return $conn;
    }
    public function getHotelList()
    {
        // here goes some hardcoded values to simulate the database
        $conn = $this->dbConnection();
        $query = "Select * from hotel";
        $result = $conn->query($query);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // var_dump($result);
        /*while ($row = $result->fetch_assoc()) 
        {
            return $row;
        }*/
        return $rows;
        // return array(
        //     "1" => new Hotels("1","Atlantis-The Palm", "DUBAI","bootstrap/img/image_atlantis.png"),
        //     "2" => new Hotels("2","Hilton", "London","bootstrap/img/image_hilton.png"),
        //     "3" => new Hotels("3","MGM Grand", "LAS VEGAS","bootstrap/img/image_mgm.png"),
        //     "4" => new Hotels("4","Crown Casino","AUSTRALIA","bootstrap/img/image_casnio.png")
        // );
    }
    public function getHotel($id)
    {
        $allHotels = $this->getHotelList();
        return $allHotels[$id];
    }
    public function getHotelbyDest($destination)
    {
        $allHotels = $this->getHotelList();
        $conn = $this->dbConnection();
        $query = "Select * from hotel where destination like '%".$destination."%'";
        $result = $conn->query($query);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if($destination == "")
        {
            return $allHotels;
        }
        else{
            return $rows;
        }
    }    
}
?>
