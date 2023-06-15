<?php

require_once "common/Page.php";
use common\Page;

class index extends Page
{

    protected function showContent()
    {
        print "<b>ОСНОВНАЯ ИНФОРМАЦИЯ ГЛАВНОЙ СТРАНИЦЫ</b>";
        print "<br></br>";
        print "<br>Если вы хотите увидеть информацию, содержащуюся в личном кабинете,</br>";
        print "<br>То вам необходимо авторизоваться на сайте.</br>";
    }
}

(new index())->show();