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
 * Heart Emojis for your PHPUnit test results!
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 */
class HeartResultPrinter extends ResultPrinter
{
    /**
     * {@inheritdoc}
     */
    protected $errorEmoji = "\xf0\x9f\x92\x94 "; // Broken heart

    /**
     * {@inheritdoc}
     */
    protected $failureEmoji = "\xf0\x9f\x92\x94 "; // Broken heart

    /**
     * {@inheritdoc}
     */
    protected $incompleteEmoji = "\xf0\x9f\x92\x9b "; // Yellow heart

    /**
     * {@inheritdoc}
     */
    protected $riskyEmoji = "\xf0\x9f\x92\x9a "; // Green heart

    /**
     * {@inheritdoc}
     */
    protected $skippedEmoji = "\xf0\x9f\x92\x99 "; // Blue heart

    /**
     * {@inheritdoc}
     */
    protected $passEmoji = "\xe2\x9d\xa4\xef\xb8\x8f "; // Red heart
}