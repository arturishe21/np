<?php
if (Request::ajax()) {

    Route::post('/np/city_get', 'Vis\NovayaPochta\IndexController@getCity');
    Route::post('/np/otdeleniy_get', 'Vis\NovayaPochta\IndexController@getOtdeleniy');


}
