<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->longText('about');
            //amenity
            $table->boolean('amenity_bathroom')->default(false)->comment("حمام");
            $table->boolean('amenity_kitchen')->default(false)->comment("آشپزخانه");
            $table->boolean('amenity_TV')->default(false)->comment("تلویزیون");
            $table->boolean('amenity_the_bed')->default(false)->comment("تخت خواب");
            $table->boolean('amenity_green_space')->default(false)->comment("فضای سبز");
            $table->boolean('amenity_near_downtown')->default(false)->comment('مرکز شهر');
            $table->boolean('amenity_near_Recreation')->default(false)->comment('مرکز تفریحی');
            $table->boolean('amenity_Wi-Fi')->default(false)->comment('وایفای');
            $table->boolean('amenity_Refrigerator')->default(false)->comment('یخچال');
            $table->boolean('amenity_parking')->default(false)->comment('پارکینگ');
            $table->boolean('amenity_Public_transportation')->default(false)->comment('حمل ونقل عمومی');
            $table->boolean('amenity_Pilgrimage')->default(false)->comment('نزدیکی اماکن مذهبی');
            $table->boolean('amenity_gem')->default(false)->comment('سالن ورزشی');
            $table->boolean('amenity_Breakfast')->default(false)->comment('صبحانه');
            $table->boolean('amenity_pets_allow')->default(false)->comment('حیوانات خانگی');
            $table->boolean('amenity_laptop')->default(false)->comment('لپ تاب');
            //prices
            $table->string('price_per_night')->nullable()->comment("قیمت هر شب");
            $table->string('price_extra_people')->nullable()->comment("قیمت هر نفر اضافه");
            $table->string('price_weekly_discount')->nullable()->comment("قیمت تخفیف هفتگی");
            $table->string('price_monthly_discount')->nullable()->comment("قیمت تخفیف ماهانه");
            //
            $table->string("arrival_time")->comment("زمان وزود");
            $table->string("departure_time")->comment("زمان خروج");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
