php<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateRegisteredUsersTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('registered_users', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('event_id');
                $table->string('name');
                $table->string('email');
                $table->string('contact_number');
                $table->string('location');
                $table->enum('gender', ['m', 'f', 'o']);
                $table->text('note')->nullable();
                $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('registered_users');
        }
    }
