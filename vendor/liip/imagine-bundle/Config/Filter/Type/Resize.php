<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Config\Filter\Type;

use Liip\ImagineBundle\Config\Filter\Argument\Size;

/**
 * @codeCoverageIgnore
 */
final class Resize extends FilterAbstract
{
    public const NAME = 'resize';

    /**
     * @var Size
     */
    private $size;

    public function __construct(Size $size)
    {
        $this->size = $size;
    }

    public function getSize(): Size
    {
        return $this->size;
    }
}
