<?php namespace Gravatalonga\ContactFormSimples\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGravatalongaContactformsimplesContacts extends Migration
{
    public function up()
    {
        Schema::create('gravatalonga_contactformsimples_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->text('message');
            $table->dateTime('readed');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gravatalonga_contactformsimples_contacts');
    }
}
