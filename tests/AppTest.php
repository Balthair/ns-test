<?php 
use PHPUnit\Framework\TestCase;
require_once ('config/app.php');
require_once ('ComicApi.php');


final Class AppTest extends TestCase {

    public function test__api_string() {
        $app = new App();
        $this->assertEquals("https://xkcd.com/info.0.json",$app->__api_string());
    }

    public function test__404() {
        $app = new ComicApi();
        $this->assertEquals(false, $app->getComicById(404));
    }

    public function test__getComicById() {
        $app = new ComicApi();
        $this->assertArrayHasKey('month', $app->getComicById(2091));
    }
}