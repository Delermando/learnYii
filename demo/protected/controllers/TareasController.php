<?php

class TareasController extends Controller{

    public function actionIndex() {
        $tareas = Tareas::model()->findAll();
        $this->render('index', array('tareas' => $tareas));
    }
}
