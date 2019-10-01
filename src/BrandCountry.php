<?php
namespace App;
use \PDO;
use App\Database;

class BrandCountry
{
    public $brandCountry;

    public function __construct()
    {
    }

    public function getAllBrandCountries ()
    {
        $query = "
                SELECT `brand_countries`.`id`,
                    `brand_countries`.`brand_country`
                FROM `neurony`.`brand_countries`;
                ";

        $conn = (Database::getInstance())->getConnection();

        return $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    }
}