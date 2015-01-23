<?php

class SaludoController extends Controller{

    public function actionIndex() {
        $saludo =  'Hello Word';
        $this->render('index', array('saludo' => $saludo));
    }
}
