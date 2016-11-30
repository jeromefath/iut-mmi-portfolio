<?php

/**
 * Description of AuthenticationAdaptor.
 *
 * @author Jérôme Fath
 */
class AuthenticationAdaptor implements \Zend\Authentication\Adapter\AdapterInterface
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * Sets username and password for authentication
     *
     * @param $username string
     * @param $password string
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Performs an authentication attempt
     *
     * @return \Zend\Authentication\Result
     * @throws \Zend\Authentication\Adapter\Exception\ExceptionInterface
     */
    public function authenticate()
    {
        //un utilisateur peut être récupéré depuis un fichier de paramètres, une base de données,...
        if($this->username == 'admin' && $this->password == 'azerty') {
            return new \Zend\Authentication\Result(1, $this->username); //success
        }

        return new \Zend\Authentication\Result(0, $this->username); //failure
    }
}