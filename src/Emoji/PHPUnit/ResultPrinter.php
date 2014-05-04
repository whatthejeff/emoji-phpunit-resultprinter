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
 * Emojis for your PHPUnit test results!
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 */
class ResultPrinter extends \PHPUnit_TextUI_ResultPrinter
{
    /**
     * The emoji used when an error occurs while running a test.
     *
     * @var string
     */
    protected $errorEmoji = "\xf0\x9f\x92\xa5 "; // Collision symbol

    /**
     * The emoji used when a test fails.
     *
     * @var string
     */
    protected $failureEmoji = "\xf0\x9f\x9a\xa8 "; // Police cars revolving light

    /**
     * The emoji used when a test is incomplete.
     *
     * @var string
     */
    protected $incompleteEmoji = "\xf0\x9f\x9a\xa7 "; // Construction sign

    /**
     * The emoji used in strict mode when a test has no assertions.
     *
     * @var string
     */
    protected $riskyEmoji = "\xe2\x9a\xa0\xef\xb8\x8f "; // Warning sign

    /**
     * The emoji used in strict mode when a test has no assertions.
     *
     * @var string
     */
    protected $skippedEmoji = "\xf0\x9f\x9a\xa9 "; // Triangular flag on post

    /**
     * The emoji used when a test passes.
     *
     * @var string
     */
    protected $passEmoji = "\xe2\xad\x90\xef\xb8\x8f "; // White Medium Star

    /**
     * {@inheritdoc}
     */
    public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
    {
        if ($this->numTests == -1) {
            $this->numTests      = count($suite);
            $this->numTestsWidth = strlen((string) $this->numTests);
            $this->maxColumn     = 36 - (2 * $this->numTestsWidth);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function writeProgress($progress)
    {
        switch($progress) {
            case 'E':
                return parent::writeProgress($this->errorEmoji);

            case 'F':
                return parent::writeProgress($this->failureEmoji);

            case 'I':
                return parent::writeProgress($this->incompleteEmoji);

            case 'R':
                return parent::writeProgress($this->riskyEmoji);

            case 'S':
                return parent::writeProgress($this->skippedEmoji);

            case '.':
                return parent::writeProgress($this->passEmoji);

            default:
                return parent::writeProgress($progress);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function writeProgressWithColor($color, $buffer)
    {
        return $this->writeProgress($buffer);
    }
}