<?php declare(strict_types = 1);
namespace IPC;

class Checkout {

    /** @var UserId */
    private $userid;

    /** @var BillingAddress */
    private $billingAddress;

    /**
     * @param UserId $userid
     */
    public function __construct(UserId $userid) {
        $this->userid = $userid;
    }

    public function defineBillingAddress(BillingAddress $address) {
        $this->billingAddress = $address;
        return new BillingAddressDefinedEvent($this->userid, $address);
    }
}
