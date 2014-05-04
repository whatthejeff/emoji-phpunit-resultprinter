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
 * Hand Emojis for your PHPUnit test results!
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 */
class HandResultPrinter extends ResultPrinter
{
    /**
     * {@inheritdoc}
     */
    protected $errorEmoji = "\xf0\x9f\x91\x8a "; // Fisted hand sign

    /**
     * {@inheritdoc}
     */
    protected $failureEmoji = "\xf0\x9f\x91\x8a "; // Fisted hand sign

    /**
     * {@inheritdoc}
     */
    protected $incompleteEmoji = "\xe2\x9c\x8b "; // Raised Hand

    /**
     * {@inheritdoc}
     */
    protected $riskyEmoji = "\xe2\x9c\x8b "; // Raised Hand

    /**
     * {@inheritdoc}
     */
    protected $skippedEmoji = "\xe2\x9c\x8a "; // Raised fist

    /**
     * {@inheritdoc}
     */
    protected $passEmoji = "\xf0\x9f\x91\x8d "; // Thumbs up sign
}