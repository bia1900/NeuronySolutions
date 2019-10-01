<?php

namespace App;
use \PDO;

class Car
{
    public $id;
    public $brand;
    public $model;
    public $seats;
    public $color;
    public $year;
    public $brandCountryId;

    public function __construct()
    {
        $this->brand = @$_POST['brand'];
        $this->model = @$_POST['model'];
        $this->seats = @$_POST['seats'];
        $this->color = @$_POST['color'];
        $this->year = @$_POST['year'];
        $this->brandCountryId = @$_POST['brand-country-id'];
    }

    public function getAllCars()
    {
       $query = "SELECT `cars`.`id`,
                    `cars`.`brand`,
                    `cars`.`model`,
                    `cars`.`seats`,
                    `cars`.`color`,
                    `cars`.`year`,
                    `brand_countries`.`brand_country`
                FROM `neurony`.`cars`
                LEFT JOIN `brand_countries` ON `brand_countries`.`id` = `cars`.`brand_country_id`
                ORDER BY `cars`.`brand`, `cars`.`model` ;
                ";
        $conn = (Database::getInstance())->getConnection();

        return $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert()
    {
        $query = "INSERT INTO `neurony`.`cars`
            (`brand`, `model`, `seats`, `color`, `year`, `brand_country_id`)
            VALUES
            (:brand, :model, :seats, :color, :year, :brand_country_id);
            ";

        $conn = (Database::getInstance())->getConnection();
        $stmt= $conn->prepare($query);

        try {
            $stmt->execute(array(
                'brand' => $this->brand,
                'model' => $this->model,
                'seats' => $this->seats,
                'color' => $this->color,
                'year' => $this->year,
                'brand_country_id' => $this->brandCountryId,
            ));
        }catch (Exception $e){
            throw $e;
        }
    }
}