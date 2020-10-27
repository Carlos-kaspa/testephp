<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilecatalogTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilecatalogTable Test Case
 */
class FilecatalogTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FilecatalogTable
     */
    protected $Filecatalog;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Filecatalog',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Filecatalog') ? [] : ['className' => FilecatalogTable::class];
        $this->Filecatalog = $this->getTableLocator()->get('Filecatalog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Filecatalog);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
