<?php

require_once '../vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php';

class Twitter extends TwitterAPIExchange
{
    private $keys;

    private $screen_name;

    public function __construct($screen_name, $keys)
    {
        $this->keys = $keys;

        parent::__construct($this->keys);

        $this->screen_name = $screen_name;
    }

    public function user($id)
    {
        return $this->setGetfield('?user_id=' . $id)
            ->buildOauth('https://api.twitter.com/1.1/users/show.json', 'GET')
            ->performRequest();
    }

    public function timeLine()
    {
        return $this->buildOauth('https://api.twitter.com/1.1/statuses/home_timeline.json', 'GET')->performRequest();
    }

    public function me()
    {
        return $this->setGetfield('?screen_name=' . $this->screen_name)
            ->buildOauth('https://api.twitter.com/1.1/users/show.json', 'GET')
            ->performRequest();
    }

    public function mytimeLine()
    {
        return $this->setGetfield('?screen_name=' . $this->screen_name)
            ->buildOauth('https://api.twitter.com/1.1/statuses/user_timeline.json', 'GET')
            ->performRequest();
    }

    public function twwetsOf($user_id)
    {
        return $this->setGetfield('?user_id=' . $user_id)
            ->buildOauth('https://api.twitter.com/1.1/statuses/user_timeline.json', 'GET')
            ->performRequest();
    }


    public function search($query)
    {
        return $this->setGetfield('?q=' . $query . '&page=1&count=10')
            ->buildOauth('https://api.twitter.com/1.1/users/search.json', 'GET')
            ->performRequest();
    }


    public function tweet($tweet_id)
    {
        return $this->setGetfield('?id=' . $tweet_id)
            ->buildOauth('https://api.twitter.com/1.1/statuses/show.json', 'GET')
            ->performRequest();
    }

}