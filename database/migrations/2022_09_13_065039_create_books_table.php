<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('author', 32);
            $table->longText('title', 150);
            $table->integer('pieces')->default(10);
            $table->timestamps();
        });

        // ide kerülnek a rekordok
        Book::create(['author'=>'Bödőcs Tibor', 'title'=>'Meg se kináltak']);
        Book::create(['author'=>'Agatha Christie', 'title'=>'Halál a Níluson', 'pieces'=>20]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
