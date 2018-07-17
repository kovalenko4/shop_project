<?php
/**
 * Created by PhpStorm.
 * User: Pashulya
 * Date: 17.07.2018
 * Time: 9:33
 */

class NewsController
{
    public function actionIndex(){
        echo 'Список новостей';
        return true;
    }

    public function actionView(){
        echo 'Просмотр одной новости';
        return true;
    }
}