<h1 align="center">Welcome to finalse sdk 👋</h1>

[![Source Code][badge-source]][source]
[![Latest Version][badge-release]][packagist]
[![Software License][badge-license]][license]
[![PHP Version][badge-php]][php]
[![Total Downloads][badge-downloads]][downloads]
<a href="https://developers.finalse.com" target="_blank">
<img alt="Documentation" src="https://img.shields.io/badge/documentation-yes-brightgreen.svg" />
</a>
<a href="#" target="_blank">
<img alt="License: Apache--2.0" src="https://img.shields.io/badge/License-Apache--2.0-yellow.svg" />
</a>

> Sdk to access Finalse Cloud Platform in PHP based environment.


## Installation

The preferred method of installation is via [Composer][]. Run the following
command to install the package and add it as a requirement to your project's
`composer.json`:

```bash
composer require finalse/sdk
```

## Usage

### FundRequest
Request Funds to someone: Use this to ask someone to pay you Money.
#### Creating FundRequest: The Basics
```php
use Finalse\Sdk\Auth;
use Finalse\Sdk\Client;
use Finalse\Sdk\CreateFundRequestForm;

// Initialize the Client with AuthAccess Token and SecretKey
$apiToken = '...';
$apiSecretKey = '*******';
$client = new Client(new Auth($apiToken, $apiSecretKey));

// Create the Fund Request object
$fundRequest = $client->fundRequest()->create(
    CreateFundRequestForm::fromArray(array(
        'h1' => 'Concert Zouglou - Ticket VIP',
        'amount' => array(
            'value' => '100000',
            'currency' => 'XOF'
        ),
    ))
);

// Having the FundRequest Object, you can now have the Secure Pay
// payment link. Redirect the user on the $securePayLink  and you're done. 
$securePayLink = $fundRequest->getSecurePay()->getLink();
echo $securePayLink;

// Alternatively, you can let the User scan the QrCode et voilà  
// Let the User scan the QrCode et voilà
$securePayQrCodeImageSrc = $fundRequest->getSecurePay()->getQrCode()->getSrc();
echo $securePayQrCodeImageSrc;
```

#### Congratulation  :tada: :tada:

Here is the result if you visit the page of `$securePayLink`
NB: Once payment completed, a `Transaction` will be created
<img title="Finalse Pay FundRequest Result" alt="Finalse Pay FundRequest Illustration" src="https://assets.finalse.com/fund-request-demo-illustration.png" width="403" />


#### Creating FundRequest: Going Further
```php
// You can indicate on creation the following attributes 
$fundRequest = $client->fundRequest()->create(
    CreateFundRequestForm::fromArray(array(
        'h1' => array(             // h1 is basically the answer to the question 'Why are you requesting that money ?'    
            'fr' => 'Ticket VIP',  // h1's type is: string | array(fr: string, en: string) 
            'en' => 'VIP Ticket',  // When h1 is string, then the default language of this FundRequest is set to your account language 
        ),                         // When h1 is array, this means that you want to display a message depending of the language
                                   // of your customer. If the customer speaks english or is in an english speaking country 
                                   // the 'h1.en' will be displayed to him. 
                                   //
                                   // Note: if your home language is fr, it is possible to  create array('en' => 'Vip Ticket')
                                   //       and not specify french language to avoid the h1 be tokenized and stored in your
                                   //       fr default language. 
        'amount' => array(
            'value' => '100 000',  // Our platform accepts spaces in number to let you visually verify numbers you submit
            'currency' => 'XOF'   
        ),
        
        'expire' => 'after 5m',    // General Syntax: '<after><space><$number><$timeUnit>' 
                                   //                 '<on><space><$iso8601Datetime>' 
                                   //                 'never'  (default value)
                                   // Examples: 
                                   // '<after><space><number><time unit>' : 'after 5m' 'after 90s' 'after 1d' 'after 1w' 'after 1M'
                                   // '<on><space><iso8601Datetime>'  : 'on 2023-01-01T01:00Z'
                                   // 
                                   // Notes: The value 'never' has the same effect as if the field 'expire' has been omitted.
                                   //        This field 'expire' is appropriate for FundRequest handling reservations. 
                                         
        'destination' => 'main',   // What is the destination of the funds ? or What is the wallet on which the money should Go
                                   // when the customer will pay you ? 
                                   // With Finalse Pay, you are allowed to have multiple wallets (Wallets are some kind of
                                   // sub accounts with their owns transactions history)  
                                   // So here you can specify which wallet should be used to receive this FundRequest. 
                                   // Allowed values are :
                                   //     'Main' : (case insensitive, default value) Use your main wallet 
                                   //     '$walletId' : Use the wallet identified by its ID 
        'fees' => array (
            'payer' => 'Me',       // Who pays the Fees ? Allowed values are the following (case insensitive) :
         ),                        //       'Sender': The Money Sender pays the fees. Here we are asking for money so the Counter
                                   //                 Part is the Sender
                                   //       'Receiver': The Money Receiver pays the fees. Here we are asking for money so we are t
                                   //                   he Receiver
                                   //       'Me': (default value) Not need to explain :-) 
                                   //       'CounterPart': The transaction Counter Part (the customer) pays the fees.
                                   //                      (aka 'Not Me' no matter if I am the Sender or the Receiver) 
                                  
        'securePay' => array(
            'onSuccess' => array(
                'redirectUserTo' => 'https://www.sefigroup.net/order/1234/payment-success'
                                   // We will redirect customer on success with the following query string:
                                   //    - spid: (SecurePayId) The value will be the Fund Request Id  
                                   //    - fid: (ForeignId) The value will be the ForeignId if submitted 
                                   //    - txid: (TransactionId) The id of the created Transaction
                                   //    - ty: Type FundRequest
            ),
            'onFailure' => array(
                'redirectUserTo' => 'https://www.sefigroup.net/order/1234/payment-failure?timestamp=19000'
                                   // We will redirect customer on success with query string:
                                   //    - spid: (SecurePayId) The value will be the Fund Request Id  
                                   //    - fid: (ForeignId) The value will be the ForeignId if submitted
                                   //    - ty: Type FundRequest
            )
        ),
        
        'description' => '...',    // Additional description about this FundRequest. (Won't be visible by the counter part)
        
        'foreignId' => '1234',     // Custom Identifier you want to add to ths Fund request. It should be uniq amount
                                   // all FundRequests.
                                   // This let you fetch a FundRequest by foreignId having the value you submit.
                                   // Notes: This value Won't be visible by the counter part
                                   //        You will see below how to fetch a FundRequest by its ForeignId.   
        
        'foreignData' => '...',    // Custom Data you would like to attach to this FundRequest. It can be a Json value
                                   // or any string as long as it does not exceed 1024 chars. (Won't be visible by the
                                   // counter part)               
    ))
);
```


#### Get FundRequest
```php
$fundRequest = $client->fundRequest()->get('<fund request id | fund request foreign id>'); 
                                    // It possible to get a FundRequest by its ForeignId : The one you've supplied on
                                    // FundRequest creation.  
```

#### List FundRequest: The Basic 
```php

// List all Fund requests returning most recent firsts.
// The returned results will be paginated and the way to navigate between page
// will be explained later.
$fundRequestCollection = $client->fundRequest()->listAll();                                         
```

#### List FundRequest: Going Further 
```php
// Introducing ListForm 
// The Previous request is equivalent to the following                                    
use \Finalse\Sdk\ListForm; 
$fundRequestCollection = $client->fundRequest()->listAll(
                            ListForm::fromArray(
                                'orderBy' => 'createdTime:DESC',
                                'limit'   => 50,
                            )
                         );                                     
```

#### Updating FundRequest 
Updating is done in a controlled manner to reduce
Remember, A good API should be easy to use and hard to misuse. Because of that, we have created
an update form per object that have all possible updates on per fields basis. For example, the field
'description' in a FundRequest is updatable and removable. Hence you will have a method either to remove it
or to update it.

```php
use \Finalse\Sdk\UpdateFundRequestForm; 
// Update a Fund Request by Removing existing Description 
$fundRequest = $client->fundRequest()->update(
                            UpdateFundRequestForm::byId('<fund request id | fund request foreign id>')
                                ->removeDescription()
                         );  

// Update a Fund Request by Setting a New Description 
$fundRequest = $client->fundRequest()->update(
                            UpdateFundRequestForm::byId('<fund request id | fund request foreign id>')
                                ->setDescription("New Description")
                         );   

// So if you want to remove both fields 'description' and 'foreignData'
$fundRequest = $client->fundRequest()->update(
                            UpdateFundRequestForm::byId('<fund request id | fund request foreign id>')
                                ->removeDescription()
                                ->removeForeignData()
                         );    

// So if you want to update the field 'description' and remove the field 'foreignData'
$fundRequest = $client->fundRequest()->update(
                            UpdateFundRequestForm::byId('<fund request id | fund request foreign id>')
                                ->setDescription('New description')
                                ->removeForeignData()
                         );
```

## Documentation

Check out the [documentation website][documentation] for detailed information
and code examples.



## Copyright and License

The finalse/sdk library is copyright © [Finalse Cloud](https://www.finalse.com)
and licensed for use under the Apache-2.0 License. Please see [LICENSE][] for
more information.


[composer]: http://getcomposer.org/
[documentation]: https://finalse.github.io/sdk-php/

[badge-source]: http://img.shields.io/badge/source-finalse/sdk-blue.svg?style=flat-square
[badge-release]: https://img.shields.io/packagist/v/finalse/sdk.svg?style=flat-square&label=release
[badge-license]: https://img.shields.io/packagist/l/finalse/sdk.svg?style=flat-square
[badge-php]: https://img.shields.io/packagist/php-v/finalse/sdk.svg?style=flat-square
[badge-build]: https://img.shields.io/travis/finalse/sdk-php/master.svg?style=flat-square
[badge-coverage]: https://img.shields.io/coveralls/github/finalse/sdk-php/master.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/finalse/sdk.svg?style=flat-square&colorB=mediumvioletred

[source]: https://github.com/finalse/sdk-php
[packagist]: https://packagist.org/packages/finalse/sdk
[license]: https://github.com/finalse/sdk-php/blob/master/LICENSE
[php]: https://php.net
[build]: https://travis-ci.org/finalse/sdk-php
[coverage]: https://coveralls.io/r/finalse/sdk-php?branch=master
[downloads]: https://packagist.org/packages/finalse/sdk
