<?php
/**
 * Created by PhpStorm.
 * User: Marlon D'Amaral
 * Date: 16/05/2018
 * Time: 21:33
 */

namespace Hcode;

class Model
{
    private $values = array();

    public function __call($name, $arguments)
    {
        $method = substr($name, 0, 3);
        $fieldName = substr($name, 3, strlen($name));

        switch ($method)
        {
            case 'get' :
                return (isset($this->values[$fieldName])) ? $this->values[$fieldName] : NULL;
            break;

            case 'set' :
                $this->values[$fieldName] = $arguments[0];
            break;
        }
        // TODO: Implement __call() method.
    }

    public function setData($data = array())
    {
        foreach ($data as $key => $value)
        {
            $this->{"set".$key}($value);
        }
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

}