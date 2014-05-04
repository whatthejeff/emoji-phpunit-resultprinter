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
 * Weather Emojis for your PHPUnit test results!
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 */
class WeatherResultPrinter extends ResultPrinter
{
    /**
     * {@inheritdoc}
     */
    protected $errorEmoji = "\xe2\x9a\xa1\xef\xb8\x8f "; // High voltage sign

    /**
     * {@inheritdoc}
     */
    protected $failureEmoji = "\xe2\x98\x94\xef\xb8\x8f "; // Rain umbrella with rain drops falling

    /**
     * {@inheritdoc}
     */
    protected $incompleteEmoji = "\xe2\x98\x81\xef\xb8\x8f "; // White Puffy Cloud

    /**
     * {@inheritdoc}
     */
    protected $riskyEmoji =  "\xe2\x9b\x85\xef\xb8\x8f "; // Sun Behind Cloud

    /**
     * {@inheritdoc}
     */
    protected $skippedEmoji = "\xf0\x9f\x8c\x80 "; // Cyclone

    /**
     * {@inheritdoc}
     */
    protected $passEmoji = "\xe2\x98\x80\xef\xb8\x8f "; // Sun with rays
}