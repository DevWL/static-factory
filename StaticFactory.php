<?php

/**
 *  Product interface
 */
Interface Vehicle
{

}


/**
 *  Car product implements Vehicle interface
 *  This class will be generated through factory factory static method
 */
Class Car implements Vehicle
{
    private $mark;
    private $model;

    public function __construct($mark,$model){
        $this->model = $model;
        $this->mark = $mark;
    }
}

/**
 *  Bike product implements Vehicle interface
 *  This class also will be generated through factory static method
 */
Class Bike implements Vehicle
{
    private $mark;
    private $model;

    public function __construct($mark,$model){
        $this->model = $model;
        $this->mark = $mark;
    }
}


/**
 *  note that this class does not implement Vehicle interface you can not create this class through factory static method call
 */
Class Bicycle{
    private $mark;
    private $model;

    public function __construct($mark,$model){
        $this->model = $model;
        $this->mark = $mark;
    }
}


/**
 *  VehicleFactory generated products that implements Vehicle interface and that are listed in $allowedType static property
 */
Class VehicleFactory
{
    /**
     *  @type Array of string
     *  @desc Restriction
     *  holds list of Types/Classes which is allowed to create
     */
    private static $allowedTypes = ['Car','Bike', 'Bicycle'];

    /**
     *  @return Vehicle 
     */
    public static function buildVehicle($type, $mark, $model){
        if(in_array($type, self::$allowedTypes)){
            $product = new $type($mark, $model);
            if(!$product instanceof Vehicle) throw new \InvalidArgumentException("Product des not implements Vehicle interface", 1);
            return $product;
        }
        throw new \InvalidArgumentException("Allow Vehicle Type before using it add type in to (private static $allowedTypes)", 1);
    }
}


