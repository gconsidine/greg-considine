<?php

class AnimationController extends BaseController {

	public function display($animation) {
    if($animation === 'squares-and-triangles') {
      return View::make('animations/squares');
    } else if ($animation === 'everywhere-usa') {
      return View::make('animations/everywhere');
    } else if ($animation === 'forest-moon') {
      return View::make('animations/forest');
    }
		return $animation;
	}

}
