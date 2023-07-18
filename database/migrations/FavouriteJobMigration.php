<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class FavouriteJobMigration
{
    public function up()
    {
        Schema::create('favourite_jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_id');
            $table->bigInteger('jobseeker_id');
            $table->status();
            $table->timestamp();
        });
    }
}

