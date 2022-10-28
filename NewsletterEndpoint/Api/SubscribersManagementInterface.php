<?php
/**
 * Copyright © Zazai All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Zazai\NewsletterEndpoint\Api;

interface SubscribersManagementInterface
{

    /**
     * GET for subscribers api
     * @param string $param
     * @return string
     */
    public function getSubscribers($param);

    /**
     * POST for subscribers api
     * @param string $param
     * @return string
     */
    public function postSubscribers($param);
}

