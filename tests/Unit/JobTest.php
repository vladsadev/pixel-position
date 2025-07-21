<?php

//test('it belongs to an employer',function (){
//
//});


use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    //AAA(Arrange,Act and Assert)

    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // for this case use both at the same time "Act and Assert"

   expect($job->employer->is($employer))->toBeTrue();




});
