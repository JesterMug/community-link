<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartnerOrganisationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartnerOrganisationsTable Test Case
 */
class PartnerOrganisationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PartnerOrganisationsTable
     */
    protected $PartnerOrganisations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.PartnerOrganisations',
        'app.Events',
        'app.PartnerOrganisationEquipment',
        'app.PartnerOrganisationIndustry',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PartnerOrganisations') ? [] : ['className' => PartnerOrganisationsTable::class];
        $this->PartnerOrganisations = $this->getTableLocator()->get('PartnerOrganisations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PartnerOrganisations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\PartnerOrganisationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
