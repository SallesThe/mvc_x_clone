<?php 
    namespace App\Models;

    use MF\Model\Container;
    use MF\Model\Model;

    class User extends Model
    {
        // * Getting data from method __set()
        public function __get($attribute)
        {
            return $this->$attribute;
        }
        
        // * Setting data from form
        public function __set($attribute, $value)
        {
            $this->$attribute = $value;
        } 

        public function subscribe(): void
        {
            $query = "INSERT INTO ";
        }

        
    }