<?php declare(strict_types = 1);
namespace IPC;

class BillingAddress {

    /** @var string */
    private $name;

    /** @var string */
    private $company;

    /** @var string */
    private $street;

    /** @var string */
    private $zip;

    /** @var string */
    private $city;

    /** @var string */
    private $country;

    /**
     * @param string $name
     * @param string $company
     * @param string $street
     * @param string $zip
     * @param string $city
     * @param string $country
     */
    public function __construct(string $name, string $company, string $street, string $zip, string $city, string $country) {
        $this->name = $name;
        $this->company = $company;
        $this->street = $street;
        $this->zip = $zip;
        $this->city = $city;
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCompany(): string {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getStreet(): string {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getZip(): string {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function getCity(): string {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountry(): string {
        return $this->country;
    }

}
