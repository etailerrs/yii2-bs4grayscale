<?php
/**
 * @link https://www.etailer.rs/
 * @copyright Copyright (c) 2019 Etailer
 * @license MIT
 */

namespace etailerrs\bs4grayscale\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * @author Etailer.Rs <bitbucket@etailer.rs>
 */
class DefaultController extends Controller
{
    public $layout = 'generator';
    public $module;
    public $generator;

    public function beforeAction($action)
    {
        Yii::$app->response->format = Response::FORMAT_HTML;
        return parent::beforeAction($action);
    }


    public function actionIndex()
    {
        $this->layout = 'main_gray';

        return $this->render('index');
    }

    
    public function actionAction($id, $name)
    {
        $generator = $this->loadGenerator($id);
        $method = 'action' . $name;
        if (method_exists($generator, $method)) {
            return $generator->$method();
        }
        throw new NotFoundHttpException("Unknown generator action: $name");
    }

    protected function loadGenerator($id)
    {
        if (isset($this->module->generators[$id])) {
            $this->generator = $this->module->generators[$id];
            $this->generator->loadStickyAttributes();
            $this->generator->load(Yii::$app->request->post());

            return $this->generator;
        }
        throw new NotFoundHttpException("Code generator not found: $id");
    }
}
