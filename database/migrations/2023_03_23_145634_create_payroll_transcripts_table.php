<?php

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
        Schema::create('payroll_transcripts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('affiliate_id')->comment('Id del afiliado titular');
            $table->foreign('affiliate_id')->references('id')->on('affiliates');
            $table->unsignedBigInteger('unit_id')->nullable()->comment('Unidad');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->integer('month_p')->comment('Mes');
            $table->integer('year_p')->comment('Año');
            $table->string('identity_card')->comment('Carnet');
            $table->string('last_name')->nullable()->comment('Apellido paterno');
            $table->string('mothers_last_name')->nullable()->comment('Apellido materno');
            $table->string('first_name')->comment('Primer nombre');
            $table->string('second_name')->nullable()->comment('Segundo nombre');
            $table->unsignedBigInteger('hierarchy_id')->nullable()->comment('Nivel jerarquico');
            $table->foreign('hierarchy_id')->references('id')->on('hierarchies');
            $table->unsignedBigInteger('degree_id')->nullable()->comment('Grado');
            $table->foreign('degree_id')->references('id')->on('degrees');
            $table->decimal('base_wage', 13, 2)->comment('Sueldo');
            $table->decimal('seniority_bonus', 13, 2)->comment('Bono antiguedad');
            $table->decimal('gain', 13, 2)->comment('Total ganado');
            $table->decimal('total', 13, 2)->comment('Total aporte');
            $table->decimal('study_bonus', 13, 2)->comment('Bono estudio');
            $table->decimal('position_bonus', 13, 2)->comment('Bono cargo');
            $table->decimal('border_bonus', 13, 2)->comment('Bono frontera');
            $table->decimal('east_bonus', 13, 2)->comment('Bono oriente');
            $table->date('birth_date')->comment('Fecha de nacimiento');
            $table->date('date_entry')->comment('Fecha de ingreso');
            $table->enum('affiliate_type', ['REGULAR', 'NUEVO'])->default('REGULAR')->comment('Afiliado regular o nuevo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payroll_transcripts');
    }
};
