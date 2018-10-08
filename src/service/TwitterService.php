<?php 

require __DIR__ . '/utils.php';
require __DIR__ . '/../model/profile.php';
require __DIR__ . '/../facade/TwitterFacade.php';

class TwitterService { 

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
		$twitterProfiles = TwitterFacade::getInstance()->getProfiles($query);
		$profiles = array();
		foreach ($twitterProfiles as $profile) {
		    array_push($profiles, new Profile(
		    	$profile->id, 
		    	$profile->name,
		    	$profile->description,
		    	$profile->followers_count,
		    	$profile->profile_image_url));
		}

		usort($profiles, arrSortObjsByKey('followers'));
		return $profiles;
	}

}