<?php

class SourceController extends BaseController {

  public function getSourcesByMood($mood) {
    if($mood === 'playful') {
      return $this->getPlayfulSources();
    }
  }

  /* 
   * Sources are returned shuffled to be scraped in order until a match 
   * based on the type specified is found.
   */
  private function getPlayfulSources() {
    $sources = [
      '/r/funny',
      '/r/humor',
      '/r/humour',
      '/r/jokes',
      '/r/puns',
      '/r/dadjokes'
    ];

    return shuffle($sources);
  }

}


