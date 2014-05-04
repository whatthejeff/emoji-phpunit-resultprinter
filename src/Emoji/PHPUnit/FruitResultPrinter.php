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
 * Fruit Emojis for your PHPUnit test results!
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 */
class FruitResultPrinter extends ResultPrinter
{
    /**
     * {@inheritdoc}
     */
    protected $errorEmoji = "\xf0\x9f\x8d\x85 "; // Red apple

    /**
     * {@inheritdoc}
     */
    protected $failureEmoji = "\xf0\x9f\x8d\x8e "; // Tomato

    /**
     * {@inheritdoc}
     */
    protected $incompleteEmoji = "\xf0\x9f\x8d\x8b "; // Lemon

    /**
     * {@inheritdoc}
     */
    protected $riskyEmoji = "\xf0\x9f\x8d\x8a "; // Tangerine

    /**
     * {@inheritdoc}
     */
    protected $skippedEmoji = "\xf0\x9f\x8d\x88 "; // Melon

    /**
     * {@inheritdoc}
     */
    protected $passEmoji = "\xf0\x9f\x8d\x8f "; // Green apple
}