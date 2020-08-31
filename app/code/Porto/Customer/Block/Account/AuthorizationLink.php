<?php

namespace Porto\Customer\Block\Account;

/**
 * Customer authorization link
 *
 * @api
 * @SuppressWarnings(PHPMD.DepthOfInheritance)
 * @since 100.0.2
 */
class AuthorizationLink extends \Magento\Customer\Block\Account\AuthorizationLink
{

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->isLoggedIn() ? __('Outloggen') : __('Inloggen');
    }
}
