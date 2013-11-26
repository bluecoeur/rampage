<?php
use Pheal\Pheal;

class RampageController extends BaseController {

	public function status() {
		$pheal = new Pheal();
		$status = $pheal->serverScope->ServerStatus();

		return Response::json($status)->setCallback(Input::get('callback'));
	}

	public function showKills() {
		$pheal = new Pheal();
		$kills = $pheal->mapScope->kills();

		return Response::json($kills->toArray())->setCallback(Input::get('callback'));
	}

}