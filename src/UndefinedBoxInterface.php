<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\ImagineSvg;

use Imagine\Image\BoxInterface;

/**
 * @deprecated use SvgBox::getType() === SvgBox::TYPE_NONE instead
 */
interface UndefinedBoxInterface extends BoxInterface
{
}
