
<?php
use PHPUnit\Framework\TestCase;

use App\PasswordStrengthCalculator;


class PasswordStrengthCalculatorTest extends TestCase
{
    /**
     * @dataProvider passwordProvider
     */
    public function testCalculateScore(string $password, int $expectedScore): void
    {
        $calculator = new PasswordStrengthCalculator();
        $this->assertEquals($expectedScore, $calculator->calculate($password));
    }

    public static function passwordProvider(): array
    {
        return [
            ['abc', 2],                      // trop court, seulement minuscules
            ['abcdefgh', 4],                // long + minuscules
            ['Abcdefgh', 6],                // long + maj + min
            ['Abcdefg1', 8],                // long + maj + min + chiffre
            ['Abcdefg1!', 10],              // tous les critères
            ['12345678', 4],                // long + chiffres
            ['!@#$%^&*', 4],                // long + caractères spéciaux
            ['A1!', 6],                     // maj + chiffre + spécial
        ];
    }
}
