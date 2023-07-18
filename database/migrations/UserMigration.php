<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class UserMigration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->integer('age')->nullable();
            $table->string('email',50)->nullable()->unique();
            $table->string('phone_number',30)->nullable();
            $table->string('password',50)->nullable();
            $table->timestamp();
        });
    }
}
