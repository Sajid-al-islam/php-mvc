<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class JobMigration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->text('description')->nullable();
            $table->string('image',50)->nullable();
            $table->string('location')->nullable();
            $table->status();
            $table->timestamp();
        });
    }
}

