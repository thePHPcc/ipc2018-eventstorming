<?php declare(strict_types = 1);
namespace IPC;

class CheckoutRepository {

    /** @var Checkout[] */
    private $checkouts = [];

    public function getCheckoutForUser(UserId $userId) {
        $userIdString = $userId->asString();
        if (!isset($this->checkouts[$userIdString])) {
            $this->checkouts[$userIdString] = new Checkout($userId);
        }
        return $this->checkouts[$userIdString];
    }

    public function commit() {
        // .. actually save things here
        //var_dump($this->checkouts);
    }
}
