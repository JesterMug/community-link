<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsFixture
 */
class EventsFixture extends TestFixture
{
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
                'partner_organisation_id' => 1,
                'location' => 'Lorem ipsum dolor sit amet',
                'host_organisation' => 'Lorem ipsum dolor sit amet',
                'date' => '2025-10-19 03:54:34',
                'participants' => 1,
                'contact_person_full_name' => 'Lorem ipsum dolor sit amet',
                'contact_person_email' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'required_crews' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'date_created' => 1760846074,
                'date_modified' => 1760846074,
            ],
        ];
        parent::init();
    }
}
