<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VolunteerAvailabilityFixture
 */
class VolunteerAvailabilityFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'volunteer_availability';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'start_datetime' => '2025-10-19 03:55:22',
                'end_datetime' => '2025-10-19 03:55:22',
                'volunteer_id' => 1,
            ],
        ];
        parent::init();
    }
}
