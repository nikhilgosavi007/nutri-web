<?php
namespace GroupProject\NutrispecApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Kunal Harkare <kunal.harkare@hof-university.de>
 */
class SpecializationTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \GroupProject\NutrispecApp\Domain\Model\Specialization
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \GroupProject\NutrispecApp\Domain\Model\Specialization();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }
}
