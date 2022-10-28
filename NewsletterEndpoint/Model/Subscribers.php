<?php
declare(strict_types=1);

namespace Zazai\NewsletterEndpoint\Model;

use Magento\Newsletter\Model\Subscriber;
use Zazai\NewsletterEndpoint\Api\Data\SubscribersInterface;

class Subscribers extends Subscriber implements SubscribersInterface
{

    public function getSubscriberId(){
        return $this->getData(self::SUBSCRIBER_ID);
    }

    public function getStoreId(){
        return $this->getData(self::STORE_ID);
    }

    public function setStoreId($storeId){
        return $this->setData(self::STORE_ID, $storeId);
    }

    public function getCustomerId(){
        return $this->getData(self::CUSTOMER_ID);
    }

    public function setCustomerId($customerId){
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }

    public function getSubscriberEmail(){
        return $this->getData(self::SUBSCRIBER_EMAIL);
    }

    public function setSubscriberEmail($subscriberEmail){
        return $this->setData(self::SUBSCRIBER_EMAIL, $subscriberEmail);
    }
}
