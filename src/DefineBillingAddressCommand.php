<?php declare(strict_types = 1);
namespace IPC;

class DefineBillingAddressCommand {

    /** @var UserId */
    private $userId;

    /** @var BillingAddress */
    private $billingAddress;

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
