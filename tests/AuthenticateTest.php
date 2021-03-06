<?php
namespace Alnutile\GoodHire;

use Guzzle\Http\Client;
use Alnutile\GoodHire\TestCase;




class AuthenticateTest extends TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testCanConnect()
    {
        $API_KEY = getenv("GOOD_HIRE_API_KEY");
        $this->assertNotFalse($API_KEY);
        $client = new \GuzzleHttp\Client(['headers' => ['Authorization' => $API_KEY]]);

    }
}
