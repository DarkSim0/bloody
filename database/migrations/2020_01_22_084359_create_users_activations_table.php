<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersActivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_activations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->reference('id')->on('registration')->onDelete('cascade');
            $table->string('token');            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        Schema::table('registration', function(Blueprint $table){
            $table->boolean('is_active')->default(0);
        });
    }


    public function down()
    {
        Schema::dropIfExists('users_activations');
        Schema::table('registration', function(Blueprint $table){
            $table->dropColumn('is_activated')->default(0);
        });
    }
}
