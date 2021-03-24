<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $collection) {
			$collection->unique('email');
			$collection->timestamp('email_verified_at')->nullable();
			$collection->string('password');
			$collection->string('phone_number');
			$collection->string('first_name');
			$collection->string('last_name');
			$collection->string('country');
			$collection->string('full_address');
			$collection->char('genre');
			$collection->rememberToken();
			$collection->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}
