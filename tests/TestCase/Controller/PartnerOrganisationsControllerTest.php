<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\PartnerOrganisationsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\PartnerOrganisationsController Test Case
 *
 * @link \App\Controller\PartnerOrganisationsController
 */
class PartnerOrganisationsControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @link \App\Controller\PartnerOrganisationsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\PartnerOrganisationsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\PartnerOrganisationsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\PartnerOrganisationsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\PartnerOrganisationsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
