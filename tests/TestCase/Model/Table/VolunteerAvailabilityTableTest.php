<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VolunteerAvailabilityTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VolunteerAvailabilityTable Test Case
 */
class VolunteerAvailabilityTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VolunteerAvailabilityTable
     */
    protected $VolunteerAvailability;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.VolunteerAvailability',
        'app.Volunteers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('VolunteerAvailability') ? [] : ['className' => VolunteerAvailabilityTable::class];
        $this->VolunteerAvailability = $this->getTableLocator()->get('VolunteerAvailability', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->VolunteerAvailability);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\VolunteerAvailabilityTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\VolunteerAvailabilityTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
