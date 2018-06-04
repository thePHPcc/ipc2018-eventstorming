<?php declare(strict_types = 1);
namespace IPC;

class Result {

    /** @var string */
    private $content;

    /**
     * @param string $content
     */
    public function __construct(string $content) {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function asString(): string {
        return $this->content;
    }


}
