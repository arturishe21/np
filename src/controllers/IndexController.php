<?php

namespace Vis\NovayaPochta;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Support\Str;

class IndexController extends Controller
{

    public function getCity(){
        $arr = NP::city();

        $city =$arr->result->cities->city;
        ?>
            <option value="">Выберите город</option>
            <? foreach($city as $k=>$el): ?>
                <option value="<?=$el->nameRu?>"><?=$el->nameRu?></option>
            <? endforeach; ?>
       <?
    }


    public function getOtdeleniy(){
         $city =  Input::get("city");

          if($city){
              $otdelen = NP::warenhouse($city)->result->whs->warenhouse;
              ?>
                <option value="">Выберите отделение</option>
                <? foreach($otdelen as $k=>$el): ?>
                    <option value="<?=$el->addressRu?>"><?=$el->addressRu?></option>
                <? endforeach;
          }

    }


}