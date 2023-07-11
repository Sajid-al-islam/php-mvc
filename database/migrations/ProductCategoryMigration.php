<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class ProductCategoryMigration
{
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->string('image',50)->nullable()->unique();
            $table->timestamp();
        });
    }
}
