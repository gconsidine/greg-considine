<?php

class WebAppController extends BaseController {

	public function getIndex() {
    return View::make('home');
	}

}
