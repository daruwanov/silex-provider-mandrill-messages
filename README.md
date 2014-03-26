silex-provider-mandrill-messages
=======================

Mandrill Messages service provider for silex micro-framework. 
This provider implement relations only with Mandrill_Messages class.
For more information about mandrill\mandrill, please check here: https://packagist.org/packages/mandrill/mandrill

Example
=======

``` php
<?php

use Silex\Application;
use Daruwanov\Provider\MandrillMessagesServiceProvider;

$app = new Application();
$app->register(new MandrillMessagesServiceProvider(), array(
            "mandrill" => array(
                'password'=>$password
              )
));

$m = $app['mandrill.messages'];
$m->sendTemplate($templatename, $templatedata, $messageData);

```

Install with Composer
=====================

``` js
{
require: {
             "daruwanov/silex-provider-mandrill-messages": "dev-master"
         }
}
```

