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
 * Face Emojis for your PHPUnit test results!
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 */
class FaceResultPrinter extends ResultPrinter
{
    /**
     * {@inheritdoc}
     */
    protected $errorEmoji = "\xf0\x9f\x98\xb2 "; // Astonished face

    /**
     * {@inheritdoc}
     */
    protected $failureEmoji = "\xf0\x9f\x98\xa1 "; // Pouting face

    /**
     * {@inheritdoc}
     */
    protected $incompleteEmoji = "\xf0\x9f\x98\xb6 "; // Face without mouth

    /**
     * {@inheritdoc}
     */
    protected $riskyEmoji = "\xf0\x9f\x98\xac "; // Grimacing Face

    /**
     * {@inheritdoc}
     */
    protected $skippedEmoji = "\xf0\x9f\x98\x91 "; // Expressionless face

    /**
     * {@inheritdoc}
     */
    protected $passEmoji = "\xf0\x9f\x98\x8a "; // Smiling face with smiling eyes
}