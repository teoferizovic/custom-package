<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Feritz\Survey\SurveyController@add');

Route::get('subtract/{a}/{b}', 'Feritz\Survey\SurveyController@subtract');