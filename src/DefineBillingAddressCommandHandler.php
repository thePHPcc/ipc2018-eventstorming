<?php declare(strict_types = 1);
namespace IPC;

class DefineBillingAddressCommandHandler {

    /** @var CheckoutRepository */
    private $repository;

    /** @var CheckoutProjector */
    private $projector;

    /**
     * @param CheckoutRepository $repository
     */
    public function __construct(CheckoutRepository $repository, CheckoutProjector $projector) {
        $this->repository = $repository;
        $this->projector = $projector;
    }

    public function handle(DefineBillingAddressCommand $command): Result {
        try {
            $checkout = $this->repository->getCheckoutForUser($command->getUserId());
            $event = $checkout->defineBillingAddress($command->getBillingAddress());
            $this->repository->commit();

            return new Result($this->projector->render($event));

        } catch (\Throwable $t) {
            // ...
        }
    }
}
