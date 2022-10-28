<?php
/**
 * Copyright © Zazai All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Zazai\NewsletterEndpoint\Model;

class SubscribersManagement implements \Zazai\NewsletterEndpoint\Api\SubscribersManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getSubscribers($param)
    {
        return 'hello api GET return the $param ' . $param;
    }

    /**
     * {@inheritdoc}
     */
    public function postSubscribers($param)
    {
        return 'hello api POST return the $param ' . $param;
    }
}

