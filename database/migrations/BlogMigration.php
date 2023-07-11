<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class BlogMigration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->text('description')->nullable();
            $table->string('image',50)->nullable();
            $table->status();
            $table->timestamp();
        });
    }
}

