<?php declare(strict_types = 1);
namespace IPC;

use Slim\Http\Request;
use Slim\Http\Response;

class DefineBillingAddressRequestHandler {

    /** @var DefineBillingAddressCommandHandler */
    private $commandHandler;

    /**
     * @param DefineBillingAddressCommandHandler $commandHandler
     */
    public function __construct(DefineBillingAddressCommandHandler $commandHandler) {
        $this->commandHandler = $commandHandler;
    }

    public function handle(Request $request, Response $response) {
        $body = $request->getParsedBody();

        $command = new DefineBillingAddressCommand(
            new UserId($request->getCookieParam('userid')),
            new BillingAddress(
                $body['name'],
                $body['company'],
                $body['street'],
                $body['zip'],
                $body['city'],
                $body['country']
            )
        );

        $result = $this->commandHandler->handle($command);
        $response->write($result->asString());

        return $response;
    }
}
