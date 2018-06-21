<?php declare(strict_types=1);

namespace Tests\CodingStandards\CsFixer\OrmJoinColumnRequireNullableFixer;

use Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase;

final class OrmJoinColumnRequireNullableFixerTest extends AbstractCheckerTestCase
{
    public function testFix(): void
    {
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong.php', __DIR__ . '/fixed/fixed.php');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong2.php', __DIR__ . '/fixed/fixed2.php');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong3.php', __DIR__ . '/fixed/fixed3.php');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong4.php', __DIR__ . '/fixed/fixed4.php');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong5.php', __DIR__ . '/fixed/fixed5.php');
    }

    public function testCorrect(): void
    {
        $this->doTestCorrectFile(__DIR__ . '/correct/correct.php');
        $this->doTestCorrectFile(__DIR__ . '/correct/correct2.php');
        $this->doTestCorrectFile(__DIR__ . '/correct/correct3.php');
        $this->doTestCorrectFile(__DIR__ . '/correct/correct4.php');
    }

    protected function provideConfig(): string
    {
        return __DIR__ . '/config.yml';
    }
}
