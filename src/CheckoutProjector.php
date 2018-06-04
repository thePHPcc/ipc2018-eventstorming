<?php declare(strict_types = 1);
namespace IPC;

class CheckoutProjector {

    public function render(Event $event) {
        if ($event instanceof BillingAddressDefinedEvent) {
            return $this->renderBillingAddressDefined($event);
        }
    }

    private function renderBillingAddressDefined(BillingAddressDefinedEvent $event) {
        $address = $event->getBillingAddress();
        return sprintf(
            '<h1>Checkout:</h1><h2>User: %s</h2><ul><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li></ul>',
            $event->getUserId()->asString(),
            $address->getName(),
            $address->getCompany(),
            $address->getStreet(),
            $address->getZip(),
            $address->getCity(),
            $address->getCountry()
        );

    }

}
