<?php declare(strict_types=1);

namespace Tests\CodingStandards\CsFixer\OrmJoinColumnRequireNullableFixer;

use Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase;

final class OrmJoinColumnRequireNullableFixerTest extends AbstractCheckerTestCase
{
    public function testFix(): void
    {
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong.php.inc', __DIR__ . '/fixed/fixed.php.inc');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong2.php.inc', __DIR__ . '/fixed/fixed2.php.inc');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong3.php.inc', __DIR__ . '/fixed/fixed3.php.inc');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong4.php.inc', __DIR__ . '/fixed/fixed4.php.inc');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong5.php.inc', __DIR__ . '/fixed/fixed5.php.inc');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong6.php.inc', __DIR__ . '/fixed/fixed6.php.inc');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong7.php.inc', __DIR__ . '/fixed/fixed7.php.inc');
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong8.php.inc', __DIR__ . '/fixed/fixed8.php.inc');
    }

    public function testCorrect(): void
    {
        $this->doTestCorrectFile(__DIR__ . '/correct/correct.php.inc');
    }

    protected function provideConfig(): string
    {
        return __DIR__ . '/config.yml';
    }
}
