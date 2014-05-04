--TEST--
phpunit --strict --repeat 10 -c ./_files/FruitResultPrinter.xml ./_files/ResultPrinterTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--strict';
$_SERVER['argv'][2] = '--repeat';
$_SERVER['argv'][3] = '10';
$_SERVER['argv'][4] = '-c';
$_SERVER['argv'][5] = dirname(__FILE__) . '/_files/FruitResultPrinter.xml';
$_SERVER['argv'][6] = dirname(__FILE__) . '/_files/ResultPrinterTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Configuration read from %a

🍏 🍎 🍅 🍊 🍈 🍋 🍏 🍎 🍅 🍊 🍈 🍋 🍏 🍎 🍅 🍊 🍈 🍋 🍏 🍎 🍅 🍊 🍈 🍋 🍏 🍎 🍅 🍊 🍈 🍋 🍏 🍎  32 / 60 ( 53%)
🍅 🍊 🍈 🍋 🍏 🍎 🍅 🍊 🍈 🍋 🍏 🍎 🍅 🍊 🍈 🍋 🍏 🍎 🍅 🍊 🍈 🍋 🍏 🍎 🍅 🍊 🍈 🍋 

Time: %s, Memory: %sMb

There were 10 errors:

1) ResultPrinterTest::testError
%s

%s:%i

2) ResultPrinterTest::testError
%s

%s:%i

3) ResultPrinterTest::testError
%s

%s:%i

4) ResultPrinterTest::testError
%s

%s:%i

5) ResultPrinterTest::testError
%s

%s:%i

6) ResultPrinterTest::testError
%s

%s:%i

7) ResultPrinterTest::testError
%s

%s:%i

8) ResultPrinterTest::testError
%s

%s:%i

9) ResultPrinterTest::testError
%s

%s:%i

10) ResultPrinterTest::testError
%s

%s:%i

--

There were 10 failures:

1) ResultPrinterTest::testFailure
%s

%s:%i

2) ResultPrinterTest::testFailure
%s

%s:%i

3) ResultPrinterTest::testFailure
%s

%s:%i

4) ResultPrinterTest::testFailure
%s

%s:%i

5) ResultPrinterTest::testFailure
%s

%s:%i

6) ResultPrinterTest::testFailure
%s

%s:%i

7) ResultPrinterTest::testFailure
%s

%s:%i

8) ResultPrinterTest::testFailure
%s

%s:%i

9) ResultPrinterTest::testFailure
%s

%s:%i

10) ResultPrinterTest::testFailure
%s

%s:%i

FAILURES!
Tests: 60, Assertions: 20, Failures: 10, Errors: 10, Incomplete: 10, Skipped: 10.