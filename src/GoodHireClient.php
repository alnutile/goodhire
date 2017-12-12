<?php
namespace Alnutile\GoodHire;

use Guzzle\Http\Client;


class GoodHireClient
{


    /**
     * @var Client $client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }


}