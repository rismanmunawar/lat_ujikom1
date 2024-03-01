<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger_update_koleksi_status', function (Blueprint $table) {
            $table->id();
            // Kolom-kolom lainnya yang diperlukan oleh trigger
        });

        // Menambahkan pernyataan SQL untuk membuat trigger
        $triggerQuery = "
        CREATE TRIGGER update_koleksi_status AFTER INSERT ON transaksi_pinjams
        FOR EACH ROW
        BEGIN
            UPDATE koleksis 
            SET status = 'Dipinjam'
            WHERE kd_koleksi = NEW.kd_koleksi;
        END;
        ";
        DB::unprepared($triggerQuery);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Untuk menurunkan migrasi
        Schema::dropIfExists('trigger_update_koleksi_status');
    }
};
