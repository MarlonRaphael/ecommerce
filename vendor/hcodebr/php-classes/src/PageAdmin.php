<?php
/**
 * Created by PhpStorm.
 * User: Marlon D'Amaral
 * Date: 09/05/2018
 * Time: 20:45
 */

namespace Hcode;

class PageAdmin extends Page
{
    /**
     * PageAdmin constructor.
     */
    public function __construct($opts = array(), $tpl_dir = "/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }

}