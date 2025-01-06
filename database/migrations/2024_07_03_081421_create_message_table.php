<?php

// database/migrations/xxxx_xx_xx_xxxxxx_update_contactinfo_field_in_messages_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateContactinfoFieldInMessagesTable extends Migration
{
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->string('contactinfo')->nullable()->change();  // Make contactinfo nullable
        });
    }

    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->string('contactinfo')->nullable(false)->change();  // Revert to not nullable
        });
    }
}
