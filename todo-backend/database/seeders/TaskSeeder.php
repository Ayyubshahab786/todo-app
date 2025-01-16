<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            ['task' => 'Complete Project Report', 'description' => 'Finalize and submit the project report by the end of the week.'],
            ['task' => 'Prepare Presentation', 'description' => 'Create a presentation for the upcoming team meeting.'],
            ['task' => 'Update Website Content', 'description' => 'Revise the content on the homepage and services page.'],
            ['task' => 'Conduct User Testing', 'description' => 'Organize and conduct user testing sessions for the new feature.'],
            ['task' => 'Fix Bugs in Application', 'description' => 'Identify and resolve bugs reported by users in the application.'],
            ['task' => 'Schedule Team Meeting', 'description' => 'Set up a meeting with the team to discuss project progress.'],
            ['task' => 'Research New Technologies', 'description' => 'Investigate new technologies that could benefit the project.'],
            ['task' => 'Write Documentation', 'description' => 'Document the code and processes for future reference.'],
            ['task' => 'Plan Marketing Strategy', 'description' => 'Develop a marketing strategy for the upcoming product launch.'],
            ['task' => 'Review Code', 'description' => 'Conduct a code review for the latest pull requests.'],
            ['task' => 'Create User Personas', 'description' => 'Develop user personas to guide product development.'],
            ['task' => 'Analyze User Feedback', 'description' => 'Review and analyze feedback from users to improve the product.'],
            ['task' => 'Set Up Development Environment', 'description' => 'Configure the development environment for new team members.'],
            ['task' => 'Conduct Team Training', 'description' => 'Organize training sessions for the team on new tools.'],
            ['task' => 'Monitor Application Performance', 'description' => 'Keep track of application performance metrics and report issues.'],
            ['task' => 'Implement Security Measures', 'description' => 'Ensure that all security measures are in place for the application.'],
            ['task' => 'Create Backup Plan', 'description' => 'Develop a backup plan for data recovery in case of failure.'],
            ['task' => 'Optimize Database Queries', 'description' => 'Review and optimize database queries for better performance.'],
            ['task' => 'Conduct Market Research', 'description' => 'Research market trends to inform product development.'],
            ['task' => 'Develop User Onboarding Process', 'description' => 'Create a user onboarding process to enhance user experience.'],
            ['task' => 'Test New Features', 'description' => 'Test the new features before the next release.'],
            ['task' => 'Update Project Timeline', 'description' => 'Revise the project timeline based on current progress.'],
            ['task' => 'Collaborate with Designers', 'description' => 'Work closely with designers to ensure alignment on project goals.'],
            ['task' => 'Prepare Budget Report', 'description' => 'Compile and prepare the budget report for the project.'],
            ['task' => 'Evaluate Project Risks', 'description' => 'Assess potential risks associated with the project and develop mitigation strategies.'],
        ];

        
        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
