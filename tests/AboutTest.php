<?php

class AboutTests extends TestCase {

  /**
   * A basic functional test example.
   *
   * @return void
   */

  public function testAbout()
  {
    $response = $this->call('GET', 'about');

    $this->assertEquals(200, $response->getStatusCode());
    
  }

}
