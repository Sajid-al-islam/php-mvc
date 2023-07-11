<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class UserMigration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email',50)->nullable()->unique();
            $table->string('contact',30)->nullable();
            $table->string('password',50)->nullable();
            $table->timestamp();
        });
    }
}
