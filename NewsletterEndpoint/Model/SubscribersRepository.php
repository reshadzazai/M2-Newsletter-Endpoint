<?php declare(strict_types=1);

namespace Zazai\NewsletterEndpoint\Model;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\TestFramework\Exception\NoSuchActionException;
use Zazai\NewsletterEndpoint\Api\SubscribersRepositoryInterface;
use Zazai\NewsletterEndpoint\Api\Data\SubscribersInterface;
use Zazai\NewsletterEndpoint\Model\SubscribersFactory;
use Zazai\NewsletterEndpoint\Model\Subscribers;
use Magento\Newsletter\Model\ResourceModel\Subscriber as SubscriberResourceModel;

class SubscribersRepository implements SubscribersRepositoryInterface
{
    private $subscribersFactory;
    private $subscriberResourceModel;

    public function __construct(
        SubscriberResourceModel $subscriberResourceModel,
        SubscribersFactory              $subscribersFactory

    )
    {
        $this->subscribersFactory = $subscribersFactory;
        $this->subscriberResourceModel = $subscriberResourceModel;
    }

    public function getById($id): SubscribersInterface
    {

        $subscriber = $this->subscribersFactory->create();
        $this->subscriberResourceModel->load($subscriber, $id);
        if (!$subscriber->getSubscriberId()) {
            throw new NoSuchEntityException(__('No such entity exist with id "%1"', $id));
        }
        return $subscriber;
    }

    public function getByEmail($email)
    {   $subscriberArray = [];
        $subscriberArray [] = $this->subscriberResourceModel->loadByEmail($email);
        if (!$subscriberArray[0]['subscriber_id']) {
            throw new NoSuchEntityException(__('No such entity exist with id "%1"', $email));
        }
        return $subscriberArray;
    }
}
