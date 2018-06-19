<?php
/**
 * Created by PhpStorm.
 * User: Marlon D'Amaral
 * Date: 16/05/2018
 * Time: 21:25
 */

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Mailer;
use \Hcode\Model;

class Category extends Model
{
    public static function listAll()
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_categories ORDER BY descategory");
    }

    public function save()
    {
        $sql = new Sql();
        $results = $sql->select("CALL sp_categories_save(:pidcategory, :pdescategory", array(
            ":pidcategory" => $this->getidcategory(),
            ":pdescategory" => $this->getdescategory()
        ));

        $this->setData($results[0]);
    }

    public function get($idcategory)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_categories WHERE idcategory = :idcategory", array(
            ":idcategory" => $idcategory
        ));
        $this->setData($results[0]);
    }

    public function delete()
    {
        $sql = new Sql();

        $sql->query("DELETE FROM tb_categories WHERE  idcategory = :idcategory", array(
            ":idcategory" => $this->getidcategory()
        ));

    }
}