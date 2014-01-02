<?php

class ContactController extends BaseController {

	public function sendMessage () {
    
    $data = [
      'text' => e(Input::get('text')),
      'email' => e(Input::get('email'))
    ];

		Mail::send('contact', $data, function($message) {
      $message->from('greg@greg-considine.com', 'Greg');
      $message->to('greg@greg-considine.com', 'Greg Considine')->subject('Contact Form Submission');
    });

	}

}
