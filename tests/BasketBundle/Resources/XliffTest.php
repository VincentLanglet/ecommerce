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

namespace Sonata\BasketBundle\Tests\Resources;

use Sonata\Component\Tests\Test\XliffValidatorTestCase;

class XliffTest extends XliffValidatorTestCase
{
    /**
     * @return array List all path to validate xliff
     */
    public function getXliffPaths()
    {
        return [[__DIR__.'/../../../../../src/Sonata/BasketBundle/Resources/translations/']];
    }
}
