<?php

class ApiController extends BaseController {
  
  private $species;
  private $moods;
  private $types;
  private $request;
  private $error;
  
  /* Populate arrays with all supported species, moods, types, and input */
  public function __construct() {
    $this->species = ['0'];
    $this->moods = ['playful'];
    $this->types = ['text', 'picture', 'video'];
    //TODO: inputs
  }

	public function getIndex($species, $mood, $type, $input) {
    if(!$this->validateRequest($species, $mood, $type, $input)) {
      return $this->getErrorMessage();  
    }
    
    $sourceController = new SourceController();
    $sources = $sourceController->getSourcesByMood($mood);

    $scrapeController = new ScrapeController();
    $response = $scrapeController->getResponseByType($sources, $type);

		return $response;
	}
  
  /* Verify request is supported */
  private function validateRequest($species, $mood, $type, $input) {
    if($this->validateSpecies($species) && $this->validateMood($mood) 
       && $this->validateType($type)) {
      return true;
    } else {
      return false;
    }
  }

  private function validateSpecies($species) {
    if(!in_array($species, $this->species)) {
      $this->error = 'invalid species';
      return false;
    }

    $this->request[] = $species;
    return true;
  }
  
  private function validateMood($mood) {
    if(!in_array($mood, $this->moods)) {
      $this->error = 'invalid mood';
      return false;
    }

    $this->request[] = $mood;
    return true;
  }

  private function validateType($type) {
    if(!in_array($type, $this->types)) {
      $this->error = 'invalid type';
      return false;
    }

    $this->request[] = $type;
    return true;
  }
  
  /* Return a string of the first error encountered in validation */
  private function getErrorMessage() {
    return '{ "status" : "Error: ' . $this->error . '" }';
  }

}
