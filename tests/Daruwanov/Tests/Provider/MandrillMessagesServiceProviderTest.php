<?php

namespace Daruwanov\Tests\Provider;

use Silex\Application;
use Silex\Provider\SerializerServiceProvider;
use Daruwanov\Provider\MandrillMessagesServiceProvider;
use ReflectionClass;
/*
 * MandrillMessagesServiceProviderTest
 */
class MandrillMessagesServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /*
     * testMandrillMessage
     */
    public function testMandrillMessage()
    {
        $password = 'temp';

        $app = new Application();
        $app->register(new MandrillMessagesServiceProvider(), array(
            "mandrill" => array('password'=>$password)
        ));

        $m = $app['mandrill.messages'];

        $this->assertInstanceOf("\Mandrill_Messages", $m);

        $this->assertEquals($password, $m->master->apikey);
    }
}