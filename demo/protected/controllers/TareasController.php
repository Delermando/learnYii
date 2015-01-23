<?php

class TareasController extends Controller{

    public function actionIndex() {
        $tareas = Tareas::model()->findAll();
        $this->render('index', array('tareas' => $tareas));
    }
    
    public function actionView($id) {
        $model = Tareas::model()->findByPk($id);
        $this->render('view', array('model' => $model));
    }
    
    public function actionEdit($id) {
        $model = Tareas::model()->findByPk($id);
        if(isset($_POST['Tareas'])){
            $model->attributes = $_POST['Tareas'];
            if($model->save()){
                $this->redirect(array('view','id'=>$model->id));
            }
        }
        $this->render('edit', array('model'=>$model));
    }
}
