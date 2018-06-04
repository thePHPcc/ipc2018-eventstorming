<?php declare(strict_types = 1);
namespace IPC;

class BillingAddressDefinedEvent implements Event {

    /** @var UserId */
    private $userId;

    /** @var BillingAddress */
    private $billingAddress;

    /**
     * @param UserId         $userId
     * @param BillingAddress $billingAddress
     */
    public function __construct(UserId $userId, BillingAddress $billingAddress) {
        $this->userId = $userId;
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return UserId
     */
    public function getUserId(): UserId {
        return $this->userId;
    }

    /**
     * @return BillingAddress
     */
    public function getBillingAddress(): BillingAddress {
        return $this->billingAddress;
    }


}
