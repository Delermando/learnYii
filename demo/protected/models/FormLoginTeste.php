<?php

class FormLoginTeste {

    public $username;
    public $password;
    public $remenberMe = false;
    private $_identify;
    

    public function rules() {
        return array(
            array('username, password','required'),
            array('rememberMe','boolean'),
            array('password','autenticate')
        );
    }

    private function model02() {
        
    }

}
