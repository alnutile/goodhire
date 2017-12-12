<?php
namespace Alnutile\GoodHire;

use Guzzle\Http\Client;
use Alnutile\GoodHire\TestCase;




class ReportTest extends TestCase
{

    public function testCanPostReport()
    {
        $API_KEY = getenv("GOOD_HIRE_API_KEY");
        $this->assertNotFalse($API_KEY);
        $client = new \GuzzleHttp\Client(['headers' => ['Authorization' => $API_KEY]]);


    }
}
