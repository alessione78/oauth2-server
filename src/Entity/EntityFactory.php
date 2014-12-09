<?php

namespace League\OAuth2\Server\Entity;

use League\OAuth2\Server\AbstractServer;

class EntityFactory
{
    /**
     * @var accessTokenInterface
     */
    private $accessTokenEntity;

    /**
     * @var authCodeInterface
     */
    private $authCodeEntity;

    /**
     * @var clientInterface
     */
    private $clientEntity;

    /**
     * @var refreshTokenInterface
     */
    private $refreshTokenEntity;

    /**
     * @var scopeInterface
     */
    private $scopeEntity;

    /**
     * @var sessionInterface
     */
    private $sessionEntity;

    /**
     * @var AbstractServer
     */
    private $server;

    public function __construct(AbstractServer $server)
    {
        $this->server = $server;
    }

    /**
     * @return accessTokenInterface
     */
    public function buildAccessTokenEntity()
    {
        if (!$this->accessTokenEntity instanceof accessTokenInterface) {
            $this->accessTokenEntity = new AccessTokenEntity($this->server);
        }
        return $this->accessTokenEntity;
    }

    /**
     * @param accessTokenInterface $accessTokenEntity
     */
    public function setAccessTokenEntity(accessTokenInterface $accessTokenEntity)
    {
        $this->accessTokenEntity = $accessTokenEntity;
    }

    /**
     * @return authCodeInterface
     */
    public function buildAuthCodeEntity()
    {
        if (!$this->authCodeEntity instanceof authCodeInterface) {
            $this->authCodeEntity = new AuthCodeEntity($this->server);
        }
        return $this->authCodeEntity;
    }

    /**
     * @param authCodeInterface $authCodeEntity
     */
    public function setAuthCodeEntity(authCodeInterface $authCodeEntity)
    {
        $this->authCodeEntity = $authCodeEntity;
    }

    /**
     * @return clientInterface
     */
    public function buildClientEntity()
    {
        if (!$this->clientEntity instanceof clientInterface) {
            $this->clientEntity = new ClientEntity($this->server);
        }
        return $this->clientEntity;
    }

    /**
     * @param clientInterface $clientEntity
     */
    public function setClientEntity(clientInterface $clientEntity)
    {
        $this->clientEntity = $clientEntity;
    }

    /**
     * @return refreshTokenInterface
     */
    public function buildRefreshTokenEntity()
    {
        if (!$this->refreshTokenEntity instanceof refreshTokenInterface) {
            $this->refreshTokenEntity = new RefreshTokenEntity($this->server);
        }
        return $this->refreshTokenEntity;
    }

    /**
     * @param refreshTokenInterface $refreshTokenEntity
     */
    public function setRefreshTokenEntity(refreshTokenInterface $refreshTokenEntity)
    {
        $this->refreshTokenEntity = $refreshTokenEntity;
    }

    /**
     * @return scopeInterface
     */
    public function buildScopeEntity()
    {
        if (!$this->scopeEntity instanceof scopeInterface) {
            $this->scopeEntity = new ScopeEntity($this->server);
        }
        return $this->scopeEntity;
    }

    /**
     * @param scopeInterface $scopeEntity
     */
    public function setScopeEntity(scopeInterface $scopeEntity)
    {
        $this->scopeEntity = $scopeEntity;
    }

    /**
     * @return sessionInterface
     */
    public function buildSessionEntity()
    {
        if (!$this->sessionEntity instanceof sessionInterface) {
            $this->sessionEntity = new SessionEntity($this->server);
        }
        return $this->sessionEntity;
    }

    /**
     * @param sessionInterface $sessionEntity
     */
    public function setSessionEntity(sessionInterface $sessionEntity)
    {
        $this->sessionEntity = $sessionEntity;
    }


} 