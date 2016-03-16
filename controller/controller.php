<?php
include_once("model/model.php");
include_once("model/dbconnection.php");
class Controller {
     public $model;
     public function __construct()
     {
          $this->model = new Model();
     }

     public function invoke()
     {
               if (!isset($_GET['id'])&&!isset($_POST['destination']))
               {
                    $hotels = $this->model->getHotelList();
                    include 'view/hotellist.php';
               } 
               else if(isset($_GET['id']))
               {
                    $hotel = $this->model->getHotel($_GET['id']);
                    include_once 'view/viewhotel.php';
               }
               else if(isset($_POST['destination']))
               {
                   $hotels = $this->model->getHotelbyDest($_POST['destination']);
                    include 'view/hotellist.php';
               }
     }
}