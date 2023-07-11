<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class CommentMigration
{
    public function up()
    {
        Schema::create('table', function (Blueprint $table) {
            $table->string('title')->null();
            $table->int('view')->null();
            $table->int('status')->null();
            $table->int('created_at')->null();
            $table->int('updated_at')->null();
        });
    }
}

$migrate = new CommentMigration();
$migrate->up();