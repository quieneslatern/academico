<?php

namespace Tests\Unit\Http\Requests;

use Tests\TestCase;

/**
 * @see \App\Http\Requests\ExternalCourseRequest
 */
class ExternalCourseRequestTest extends TestCase
{
    /** @var \App\Http\Requests\ExternalCourseRequest */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\ExternalCourseRequest();
    }

    /**
     * @test
     */
    public function authorize()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->authorize();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function rules()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->rules();

        $this->assertValidationRules([
            'campus_id' => 'required',
            'volume' => 'required|numeric',
            'name' => 'required|string|max:255',
            'price' => 'nullable|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'period_id' => 'required|numeric',
            'rhythm_id' => 'required|numeric',
        ], $actual);
    }

    /**
     * @test
     */
    public function attributes()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->attributes();

        $this->assertEquals([], $actual);
    }

    /**
     * @test
     */
    public function messages()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->messages();

        $this->assertEquals([], $actual);
    }

    // test cases...
}
