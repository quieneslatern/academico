<?php

namespace Tests\Feature\Http\Controllers\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\EvaluationType;
use App\Models\User;

/**
 * @see \App\Http\Controllers\Admin\EvaluationTypeCrudController
 */
class EvaluationTypeCrudControllerTest extends TestCase
{
    use RefreshDatabase;

    public $user;
    public $model;
    public $table;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed('TestSeeder');
        $this->user = factory(User::class)->create();
        $this->user->assignRole('admin');

        \Auth::guard(backpack_guard_name())->login($this->user);

        $this->model = EvaluationType::class;
        $this->table = 'evaluation_types';
        $this->entityname = 'evaluationtype';
    }

    /**
     * @test
     */
    public function create_returns_an_ok_response()
    {
        $response = $this->get(route('evaluationtype.create'));
        $response->assertOk();
    }

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->delete(route('evaluationtype.destroy', ['id' => $id]));

        $response->assertOk();
        $this->assertDeleted($evaluationtype);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('evaluationtype.edit', ['id' => $id]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $response = $this->get(route('evaluationtype.index'));
        $response->assertOk();
    }

    /**
     * @test
     */
    public function search_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('evaluationtype.search'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('evaluationtype.store'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->put(route('evaluationtype.update', ['id' => $id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
