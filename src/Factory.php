<?php declare(strict_types = 1);
namespace IPC;

use Slim\App;

class Factory {

    public function createSlimApplication(): App {
        return new App(['settings' => ['displayErrorDetails' => true]]);
    }

    public function createDefineBillingAddressRequestHandler(): DefineBillingAddressRequestHandler {
        return new DefineBillingAddressRequestHandler(
            $this->createDefineBillingAddressCommandHandler()
        );
    }

    private function createDefineBillingAddressCommandHandler(): DefineBillingAddressCommandHandler {
        return new DefineBillingAddressCommandHandler(
            $this->createCheckoutRepository(),
            $this->createProjector()
        );
    }

    private function createCheckoutRepository(): CheckoutRepository {
        return new CheckoutRepository();
    }

    private function createProjector() {
        return new CheckoutProjector();
    }

}
