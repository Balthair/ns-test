<?php 
require 'vendor/autoload.php';
require_once ('config/app.php');

use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class ComicApi {

    public function getLastComic($api_string) {
        $client = new GuzzleHttp\Client();
        $res = $client->get($api_string);
        return json_decode($res->getBody(), true);
    }

    public function getComicById($id) {
        try {
            $client = new GuzzleHttp\Client();
            $app = new App();
            $base_url = $app->__base_url();
            $urlById = $app->__api_by_id($id);
            $res = $client->get($urlById);
            return json_decode($res->getBody(), true);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
                return false;
            }
        }
    }

}