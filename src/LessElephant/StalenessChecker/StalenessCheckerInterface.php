<?php

/**
 * This file is part of the LessElephant package.
 *
 * (c) Matteo Giachino <matteog@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Just for fun...
 */

namespace LessElephant\StalenessChecker;

/**
 * StalenessCheckerInterface
 *
 * @author Matteo Giachino <matteog@gmail.com>
 */

interface StalenessCheckerInterface
{
    /**
     * return true if the project do not need to be recompiled
     *
     * @return boolean
     * @abstract
     */
    public function isClean();
}
