<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/8/14
 * Time: 1:01 PM
 */
namespace AuthRocket;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Collection;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Model;
use GuzzleHttp\Subscriber\Retry\RetrySubscriber;

class Client extends GuzzleClient {

    public function __construct(array $config = []){

    }

    private function handleHttpClientOptions(Collection $config){

    }

    private function handleCredentialsOptions(Collection $config){

    }
}
