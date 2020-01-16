<?php
namespace League\OAuth2\Client\Provider;

class DokeopResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response.
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * Returns the identifier of the authorized resource owner.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->response['id'] ?: null;
    }

    /**
     * Returns resource owner first name.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->response['first_name'] ?: null;
    }

    /**
     * Returns resource owner last name.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->response['last_name'] ?: null;
    }

    /**
     * Returns resource owner email.
     *
     * @return bool
     */
    public function getEmail()
    {
        return $this->response['email'];
    }

    /**
     * Returns all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
