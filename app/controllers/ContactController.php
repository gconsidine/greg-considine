<?php

class ContactController extends BaseController {

	public function sendMessage () {
    
    $data = [
      'text' => e(Input::get('text')),
      'email' => e(Input::get('email'))
    ];

		Mail::send('contact', $data, function($message) {
      $message->from('me@greg-considine.com', 'Greg');
      $message->to('me@greg-considine.com', 'Greg Considine')->subject('Contact Form Submission');
    });

	}

}
