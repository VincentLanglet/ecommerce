<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Component\Customer;

use Sonata\DatagridBundle\Pager\PageableInterface;
use Sonata\Doctrine\Model\ManagerInterface;

interface AddressManagerInterface extends ManagerInterface, PageableInterface
{
    /**
     * Sets $address the current customer address.
     */
    public function setCurrent(AddressInterface $address);
}
