<?php declare(strict_types = 1);
namespace IPC;

class UserId {

    /** @var string */
    private $id;

    public function __construct(string $id = null) {
        if ($id === null) {
            $id = trim(file_get_contents('/proc/sys/kernel/random/uuid'));
        }
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function asString(): string {
        return $this->id;
    }



}
