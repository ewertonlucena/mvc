<?php
/**
 * Controller base
 *
 * @author ewertonlucena@gmail.com
 */
class controller { //classe controller base para todos os Controllers
    public function loadView($viewName, $viewData = array()){
        extract($viewData); //$chave = $dados, onde $chave será uma variável
        include 'views/'.$viewName.'.php';//include views da pasta views/
    }
}
