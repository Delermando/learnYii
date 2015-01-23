<?php

class Tareas extends CActiveRecord{
    
    public static function model($className = __CLASS__){	
        return parent::model($className);
    }
    
    public function rules() {
        return array(
            array('nome, description', 'required', 'message'=>'Campo requerido!'),
        );
    }
}
