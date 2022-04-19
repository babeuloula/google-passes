<?php

declare(strict_types=1);

namespace GooglePasses\Clients;

use Google_Client;
use GooglePasses\Factories\ResourcesFactory;
use GooglePasses\Helpers\Config;
use GooglePasses\WalletObjects\Classes\LoyaltyClass;
use GooglePasses\WalletObjects\Objects\LoyaltyObject;
use Psr\Log\LoggerInterface;

class GoogleRestClient
{
    protected Google_Client $client;
    protected LoggerInterface $logger;
    protected ?GoogleWalletObjectsService $service = null;
    protected ResourcesFactory $resourcesFactory;

    public function __construct(Config $config, LoggerInterface $logger)
    {
        $this->client = new Google_Client();
        $this->logger = $logger;

        // do OAuth2.0 via service account file.
        // See https://developers.google.com/api-client-library/php/auth/service-accounts#authorizingrequests
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $config->getServiceAccountFilePath());
        $this->client->useApplicationDefaultCredentials();
        $this->client->setApplicationName($config->getApplicationName());
        $this->client->setScopes($config->getScopes());

        $this->resourcesFactory = new ResourcesFactory($this->getService());
    }

    public function getService(): GoogleWalletObjectsService
    {
        if (false === $this->service instanceof GoogleWalletObjectsService) {
            $this->service = new GoogleWalletObjectsService($this->client);
        }

        return $this->service;
    }

    /** @return array|null|LoyaltyClass */
    public function insertLoyaltyClass(LoyaltyClass $loyaltyClass)
    {
        $response = null;
        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->insert($loyaltyClass);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string) $gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string) $e);
        }

        return $response;
    }

    /** @return array|null|LoyaltyClass */
    public function patchLoyaltyClass(LoyaltyClass $loyaltyClass)
    {
        $response = null;
        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->patch($loyaltyClass->getId(), $loyaltyClass);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string) $gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string) $e);
        }

        return $response;
    }

    /** @return array|null|LoyaltyClass */
    public function updateLoyaltyClass(LoyaltyClass $loyaltyClass)
    {
        $response = null;
        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->update($loyaltyClass->getId(), $loyaltyClass);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string) $gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string) $e);
        }

        return $response;
    }

    /** @return array|null|LoyaltyClass */
    public function getLoyaltyClass(string $classId)
    {
        $response = null;
        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->get($classId);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string) $gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string) $e);
        }

        return $response;
    }

    /** @return array|null|LoyaltyObject */
    public function getLoyaltyObject(string $objectId)
    {
        $response = null;
        $loyaltyResource = $this->resourcesFactory->makeLoyaltyObjectResource();

        try {
            $response = $loyaltyResource->get($objectId);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string) $gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string) $e);
        }

        return $response;
    }

    /** @return array|null|LoyaltyObject */
    public function insertLoyaltyObject(LoyaltyObject $loyaltyObject)
    {
        $response = null;
        $loyaltyResource = $this->resourcesFactory->makeLoyaltyObjectResource();

        try {
            $response = $loyaltyResource->insert($loyaltyObject);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string) $gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string) $e);
        }

        return $response;
    }

    /** @return array|null|LoyaltyObject */
    public function updateLoyaltyObject(LoyaltyObject $loyaltyObject)
    {
        $response = null;
        $loyaltyResource = $this->resourcesFactory->makeLoyaltyObjectResource();

        try {
            $response = $loyaltyResource->update($loyaltyObject->getId(), $loyaltyObject);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string) $gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string) $e);
        }

        return $response;
    }
}
