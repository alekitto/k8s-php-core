<?php

/**
 * This file is part of the k8s/core library.
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Core\Annotation;

#[\Attribute]
class Attribute
{
    public function __construct(
        public string $name,
        public AttributeType $type,
        public string $model,
        public bool $isRequired = false
    ) {
    }
}
