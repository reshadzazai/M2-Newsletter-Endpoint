<?php declare(strict_types=1);

namespace Zazai\NewsletterEndpoint\Api\Data;

/**
 * Subscribers interface.
 * @api
 * @since 1.0.0
 */
interface SubscribersInterface
{
    /**#@+
     * Constants for keys of data array
     */
    const SUBSCRIBER_ID = 'subscriber_id';
    const STORE_ID = 'store_id';
    const CUSTOMER_ID = 'customer_id';
    const SUBSCRIBER_EMAIL = 'subscriber_email';

    /**#@-*/

    /**
     * Get id.
     *
     * @return int
     */
    public function getSubscriberId();


    /**
     * Get storeId.
     *
     * @return string
     */
    public function getStoreId();

    /**
     * Set storeId.
     *
     * @param string $storeId
     * @return $this
     */
    public function setStoreId($storeId);

    /**
     * Get CustomerId.
     *
     * @return string
     */
    public function getCustomerId();

    /**
     * Set CustomerId.
     *
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId($customerId);

    /**
     * Get subscriberEmail.
     *
     * @return string
     */
    public function getSubscriberEmail();

    /**
     * Set subscriberEmail.
     *
     * @param string $subscriberEmail
     * @return $this
     */
    public function setSubscriberEmail($subscriberEmail);
}
