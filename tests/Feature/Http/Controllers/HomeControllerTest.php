<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\HomeController
 */
class HomeControllerTest extends TestCase
{
    /**
     * @test
     */
    public function admin_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin'));

        $response->assertOk();
        $response->assertViewIs('admin.dashboard');
        $response->assertViewHas('pending_enrollment_count');
        $response->assertViewHas('paid_enrollment_count');
        $response->assertViewHas('students_count');
        $response->assertViewHas('currentPeriod');
        $response->assertViewHas('enrollmentsPeriod');
        $response->assertViewHas('total_enrollment_count');
        $response->assertViewHas('pending_attendance');
        $response->assertViewHas('unassigned_events');
        $response->assertViewHas('upcoming_leaves');
        $response->assertViewHas('resources');
        $response->assertViewHas('events');
        $response->assertViewHas('pending_leads');
        $response->assertViewHas('action_comments');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get('/');

        $response->assertRedirect(route('admin'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function student_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('studentDashboard'));

        $response->assertOk();
        $response->assertViewIs('student.dashboard');
        $response->assertViewHas('student');
        $response->assertViewHas('enrollments');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function teacher_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('teacherDashboard'));

        $response->assertOk();
        $response->assertViewIs('teacher.dashboard');
        $response->assertViewHas('teacher');
        $response->assertViewHas('courses');
        $response->assertViewHas('pending_attendance');
        $response->assertViewHas('selected_period');

        // TODO: perform additional assertions
    }

    // test cases...
}
