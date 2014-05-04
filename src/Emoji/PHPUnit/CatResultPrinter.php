<?php

/*
 * This file is part of the Emoji PHPUnit Result Printer.
 *
 * (c) Jeff Welch <whatthejeff@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Emoji\PHPUnit;

/**
 * Cat Emojis for your PHPUnit test results!
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 */
class CatResultPrinter extends ResultPrinter
{
    /**
     * {@inheritdoc}
     */
    protected $errorEmoji = "\xf0\x9f\x99\x80 "; // Weary cat face

    /**
     * {@inheritdoc}
     */
    protected $failureEmoji = "\xf0\x9f\x98\xbf "; // Crying cat face

    /**
     * {@inheritdoc}
     */
    protected $incompleteEmoji = "\xf0\x9f\x90\xb1 "; // Cat face

    /**
     * {@inheritdoc}
     */
    protected $riskyEmoji = "\xf0\x9f\x98\xbe "; // Pouting cat face

    /**
     * {@inheritdoc}
     */
    protected $skippedEmoji = "\xf0\x9f\x98\xbc "; // Cat face with wry smile

    /**
     * {@inheritdoc}
     */
    protected $passEmoji = "\xf0\x9f\x98\xbb "; // Smiling cat face with heart-shaped eyes
}