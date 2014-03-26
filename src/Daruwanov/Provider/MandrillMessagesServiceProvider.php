<?php

namespace Daruwanov\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Mandrill;
use Mandrill_Messages;

/*
 * MandrillServiceProvider
 */
class MandrillMessagesServiceProvider implements ServiceProviderInterface
{
    /*
     * register
     */
    public function register(Application $app)
    {
        $app['mandrill.messages'] = $app->share(function() use ($app) {
            if(isset($app['mandrill']) && is_array($app['mandrill'])) {
                $mandrill = new Mandrill($app['mandrill']['password']);
                $mandrillMessages = new  Mandrill_Messages($mandrill);
            }
            else {
              throw new \Exception("Error: Array key 'mandrill' does not exist or input data not Array");
            }
            return $mandrillMessages;
        });
    }

    public function boot(Application $app)
    {

    }
}