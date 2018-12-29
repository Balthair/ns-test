<?php 
class App {

    public $api_string = "";
    public $base_url = "";

    public function __api_string() {

        $this->api_string = "https://xkcd.com/info.0.json";

        return $this->api_string;

    }

    public function __api_by_id($id) {
        $this->api_string = "https://xkcd.com/$id/info.0.json";

        return $this->api_string;
    }

    public function __base_url() {

        $this->base_url = "/rain-test/";

        return $this->base_url;

    }


}