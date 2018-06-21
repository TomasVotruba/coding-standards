<?php declare(strict_types=1);

namespace Tests\CodingStandards\CsFixer\OrmJoinColumnRequireNullableFixer;

use Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase;

final class OrmJoinColumnRequireNullableFixerTest extends AbstractCheckerTestCase
{
    public function testFix()
    {
        $this->doTestWrongToFixedFile(__DIR__ . '/wrong/wrong.php.inc', __DIR__ . '/fixed/fixed.php.inc');
    }

    protected function provideConfig(): string
    {
        return __DIR__ . '/config.yml';
    }
}
