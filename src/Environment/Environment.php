<?php

declare(strict_types=1);

namespace Nofrixion\Environment;

use Nofrixion\Exception\InvalidEnvironmentException;

class Environment
{
    const SANDBOX = 'sandbox';

    const LIVE = 'live';

    const ALLOWED_ENV = [self::SANDBOX, self::LIVE];

    /** @var array of identity servers used for each environment */
    private static $identityServers = [
        self::SANDBOX => 'https://identity-sandbox.nofrixion.com',
        self::LIVE => 'https://identity.nofrixion.com',
    ];

    /** @var array of api servers used for each environment */
    private static $apiServers = [
        self::SANDBOX => 'https://api-sandbox.nofrixion.com',
        self::LIVE => 'https://api.nofrixion.com',
    ];

    /** @var array of portal servers used for each environment */
    private static $portalServers = [
        self::SANDBOX => 'https://portal-sandbox.nofrixion.com',
        self::LIVE => 'https://portal.nofrixion.com',
    ];

    /** @var array of business servers used for each environment */
    private static $portalServers = [
        self::SANDBOX => 'https://business-sandbox.nofrixion.com',
        self::LIVE => 'https://business.nofrixion.com',
    ];

    /** @var self Environment instance */
    private static $instance = null;

    /** @var string Active environment */
    private $env;

    /** @var array of request headers which will be added in all requests in this environment */
    private $requestHeaders = [];


    private function __construct()
    {
        $this->env = self::SANDBOX;
    }

    public static function getInstance(): self
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function getIdentityServer(): ?string
    {
        return self::$identityServers[self::getInstance()->getEnv()] ?? null;
    }

    public static function getApiServer(): ?string
    {
        return self::$apiServers[self::getInstance()->getEnv()] ?? null;
    }

    public static function getPortalServer(): ?string
    {
        return self::$portalServers[self::getInstance()->getEnv()] ?? null;
    }

    public static function getBusinessServer(): ?string
    {
        return self::$businessServers[self::getInstance()->getEnv()] ?? null;
    }

    public static function reset(): void
    {
        self::$instance = new self();
    }

    public function getEnv(): string
    {
        return $this->env;
    }

    /**
     * @throws InvalidEnvironmentException
     */
    public function setEnv(string $env): void
    {
        $this->checkEnv($env);

        $this->env = $env;
    }

    public function isSandbox(): bool
    {
        return $this->env == self::SANDBOX;
    }

    public function isLive(): bool
    {
        return $this->env == self::LIVE;
    }

    public function setToSandbox(): void
    {
        $this->env = self::SANDBOX;
    }

    public function setToLive(): void
    {
        $this->env = self::LIVE;
    }

    /**
     * Sets Request headers which will be included in all Requests.
     * This can be nicely used to include fraud prevention headers, for example.
     */
    public function setDefaultRequestHeaders(array $headers): void
    {
        $this->requestHeaders = $headers;
    }

    /**
     * Returns default request headers.
     */
    public function getDefaultRequestHeaders(): array
    {
        return $this->requestHeaders;
    }

    /**
     * @throws InvalidEnvironmentException
     */
    private function checkEnv(string $env): void
    {
        if (!in_array($env, self::ALLOWED_ENV)) {
            $allowedValueString = implode(', ', self::ALLOWED_ENV);

            throw new InvalidEnvironmentException("Invalid environment, the allowed environments are {$allowedValueString}.");
        }
    }
}
