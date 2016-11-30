<?php

/**
 * Description of Authentication.
 *
 * @author Jérôme Fath
 */
class Authentication
{
    /**
     * @var \Zend\Authentication\AuthenticationService
     */
    protected $authentification;

    /**
     * Constructeur de la classe Authentication, initialise le service d'authentification de Zend
     */
    public function __construct()
    {
        $this->authentification = new \Zend\Authentication\AuthenticationService();
    }

    /**
     * Authentifie un utilisateur
     *
     * @param $username string
     * @param $password string
     * @return \Zend\Authentication\Result
     */
    public function authenticate($username, $password)
    {
        return $this->authentification->authenticate(new AuthenticationAdaptor($username, $password));
    }

    /**
     * Vérifie si l'utilisateur connecté est "admin"
     *
     * @return bool
     */
    public function isAdmin()
    {
        return 'admin' === $this->authentification->getIdentity();
    }
}