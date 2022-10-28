<?php declare(strict_types=1);

namespace Zazai\NewsletterEndpoint\Api;

/**
 * Subscribers repository interface.
 * @api
 * @since 1.0.0
 */
interface SubscribersRepositoryInterface
{

    /**
     * Retrieve subscribers.
     *
     * @param int $id
     * @return Zazai\NewsletterEndpoint\Api\Data\SubscribersInterface;
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve subscribers.
     *
     * @param string $email
     * @return \Zazai\NewsletterEndpoint\Data\SubscribersInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getByEmail($email);


}
