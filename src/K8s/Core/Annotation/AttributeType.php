<?php

declare(strict_types=1);

namespace K8s\Core\Annotation;

enum AttributeType
{
    case Model;
    case Collection;
    case Api;
}
