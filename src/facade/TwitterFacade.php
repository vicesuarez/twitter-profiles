<?php 

require __DIR__ . '/TwitterAPIExchange.php';
require __DIR__ . '/../config/config.php';

class TwitterFacade { 

	private static $instance = null;
	      
	private function __construct() {}
	
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $myClass = __CLASS__;
            self::$instance = new $myClass;
        } 
        return self::$instance;
    }

	public function getProfiles($query) {
		$url = 'https://api.twitter.com/1.1/users/search.json';
		$getfield = '?q='.$query;    
		$requestMethod = 'GET';
		$twitter = new TwitterAPIExchange(TwitterOauthConfiguration::getSettings());
		$json =  $twitter->setGetfield($getfield)
		                     ->buildOauth($url, $requestMethod)
		                     ->performRequest();
		return json_decode($json);
	}
}