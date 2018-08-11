<?php
namespace Skreh\Library\File;
/**
 * Created by PhpStorm.
 * User: cg
 * Date: 2018/8/11
 * Time: 14:23
 */
class file {

    private $name;

    /**
     * file constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

}