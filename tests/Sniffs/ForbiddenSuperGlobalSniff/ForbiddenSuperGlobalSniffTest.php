<?php declare(strict_types=1);

namespace Tests\CodingStandards\Sniffs\ForbiddenSuperGlobalSniff;

use Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase;

final class ForbiddenSuperGlobalSniffTest extends AbstractCheckerTestCase
{
    public function testWrong(): void
    {
        $this->doTestWrongFile(__DIR__ . '/wrong/wrong.php.inc');
        $this->doTestWrongFile(__DIR__ . '/wrong/wrong2.php.inc');
    }

    protected function provideConfig(): string
    {
        return __DIR__ . '/config.yml';
    }
}
