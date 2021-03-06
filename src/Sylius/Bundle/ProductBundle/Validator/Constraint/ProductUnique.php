<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ProductBundle\Validator\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Unique product property constraint.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 *
 * @Annotation
 */
class ProductUnique extends Constraint
{
    public $message = 'This property must be unique';
    public $property;

    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
        return array('property');
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return 'sylius.validator.product.unique';
    }

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
