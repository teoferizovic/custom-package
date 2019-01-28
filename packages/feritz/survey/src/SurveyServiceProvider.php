<?php

namespace Feritz\Survey;

use Illuminate\Support\ServiceProvider;

/**
* 
*/
class SurveyServiceProvider extends ServiceProvider
{
	
	public function boot(){
		include __DIR__.'/routes.php';
	}

	public function register(){
		$this->app->make('Feritz\Survey\SurveyController');
	}

}