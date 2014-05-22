Nexmo for Laravel 4
==============

Implements a service for Nexmo messaging based on

### Composer Configuration

Include the artistan nexmo package as a dependency in your `composer.json` [Packagist](https://packagist.org/packages/artistan/nexmo):

    "artistan/nexmo": "0.1.*"

### Installation

Once you update your composer configuration, run `composer install` to download the dependencies.

Add a ServiceProvider to your providers array in `app/config/app.php`:

	'providers' => array(

		'Artistan\Nexmo\NexmoServiceProvider',

	)

### Usage - work in progress

Sending SMS via the Nexmo SMS gateway.


Quick Examples
--------------

1) Sending an SMS

    $sms = new Artistan\Nexmo\Service\Message\Sms;
        OR
    $sms = \App::make('nexmosmsmessage');
        AND
    $result = $sms->sendText('15005554320','15555633637','dude, this is from a laravel package');

    OR

    $sms = NexmoSmsMessage::sendText('15005554320','15555633637','dude, this is from a laravel package');

2) Recieving SMS

//  TODO:: setup default routing for this...
     $sms = new Artistan\Nexmo\Service\Message\Sms;
        OR
     $sms = \App::make('nexmosmsmessage');
        AND
     if ($sms->inboundText()) {
         $sms->reply('You said: ' . $sms->text);
     }

     OR

    if(NexmoAccount::inboundText()){
         NexmoAccount::reply('You said: ' . $sms->text);
    }




3) Receiving a message receipt

//  TODO:: setup default routing for this...
     $receipt = new Artistan\Nexmo\Service\Receipt;
        OR
     $receipt = \App::make('nexmoreceipt');
        AND
     if ($receipt->exists()) {
         switch ($receipt->status) {
             case $receipt::STATUS_DELIVERED:
                 // The message was delivered to the handset!
                 break;

             case $receipt::STATUS_FAILED:
             case $receipt::STATUS_EXPIRED:
                 // The message failed to be delivered
                 break;
         }
     }



4) List purchased numbers on your account

     $account = new Artistan\Nexmo\Service\Account;
        OR
     $account = \App::make('nexmoaccount');
        AND
     $numbers = $account->numbersList();

     OR

     $numbers = NexmoAccount::numbersList();






Most Frequent Issues
--------------------

 Sending a message returns false.

    This is usually due to your webserver unable to send a request to
    Nexmo. Make sure the following are met:

    1) Either CURL is enabled for your PHP installation or the PHP
       option 'allow_url_fopen' is set to 1 (default).

    2) You have no firewalls blocking access to rest.nexmo.com/sms/json
       on port 443.



 Your message appears to have been sent but you do not recieve it.

    Run the example.php file included. This will show any errors that
    are returned from Nexmo.