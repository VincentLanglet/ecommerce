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

namespace Sonata\BasketBundle\Serializer;

use Sonata\Form\Serializer\BaseSerializerHandler;

/**
 * @author Sylvain Deloux <sylvain.deloux@ekino.com>
 */
class BasketSerializerHandler extends BaseSerializerHandler
{
    public static function getType()
    {
        return 'sonata_basket_basket_id';
    }
}
