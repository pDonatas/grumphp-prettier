<?php

declare(strict_types=1);

namespace pDonatas\Prettier;

use GrumPHP\Extension\ExtensionInterface;

class ExtensionLoader implements ExtensionInterface
{
    public function imports(): iterable
    {
        yield __DIR__ . '/../services.yaml';
    }
}
