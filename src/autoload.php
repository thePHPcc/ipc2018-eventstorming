<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'ipc\\billingaddress' => '/BillingAddress.php',
                'ipc\\billingaddressdefinedevent' => '/BillingAddressDefinedEvent.php',
                'ipc\\checkout' => '/Checkout.php',
                'ipc\\checkoutprojector' => '/CheckoutProjector.php',
                'ipc\\checkoutrepository' => '/CheckoutRepository.php',
                'ipc\\definebillingaddresscommand' => '/DefineBillingAddressCommand.php',
                'ipc\\definebillingaddresscommandhandler' => '/DefineBillingAddressCommandHandler.php',
                'ipc\\definebillingaddressrequesthandler' => '/DefineBillingAddressRequestHandler.php',
                'ipc\\event' => '/Event.php',
                'ipc\\factory' => '/Factory.php',
                'ipc\\result' => '/Result.php',
                'ipc\\userid' => '/UserId.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd