<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('subjects')->insert([
            'title' => 'Juicio de arrendamiento',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Juicio precario',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Resolución y cumplimiento de contrato',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Tercerias',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Indemnización de perjuicio',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Interdicciones con compin y sin compin',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Acción de petición de herencia',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Acción de reforma de testamento',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Acción reivindicatoria',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Posesión efectiva testada',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Cambio de nombre',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Juicio de partición',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Gestión preparatoria',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Prescripción de deudas de aseo',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Prescripciones',
            'practice_area_id' => 1
        ]);

        DB::table('subjects')->insert([
            'title' => 'Redacción de escrituras',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Contratos',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Promesas',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Estudios de titulo',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Revisión de títulos',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Cesiones de derechos',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Usufructo',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Redacción, negociación y cierre de contrato de arriendo',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Constitución y modificación de sociedades',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Transformación, visión y fusión de sociedades',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Tramitación de patentes municipales',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Testamentos',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Posesión efectiva',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Transacciones',
            'practice_area_id' => 2
        ]);

        DB::table('subjects')->insert([
            'title' => 'Obtención de visa temporaria, definitiva',
            'practice_area_id' => 3
        ]);

        DB::table('subjects')->insert([
            'title' => 'Reconsideración en caso de rechazo de visa',
            'practice_area_id' => 3
        ]);

        DB::table('subjects')->insert([
            'title' => 'Solicitud de nacionalidad',
            'practice_area_id' => 3
        ]);

        DB::table('subjects')->insert([
            'title' => 'Recursos judiciales en caso de expulsión del país',
            'practice_area_id' => 3
        ]);

        DB::table('subjects')->insert([
            'title' => 'Otros',
            'practice_area_id' => 3
        ]);

        DB::table('subjects')->insert([
            'title' => 'Divorcios',
            'practice_area_id' => 4
        ]);

        DB::table('subjects')->insert([
            'title' => 'Pensiones de alimentos',
            'practice_area_id' => 4
        ]);

        DB::table('subjects')->insert([
            'title' => 'Violencia intrafamiliar',
            'practice_area_id' => 4
        ]);

        DB::table('subjects')->insert([
            'title' => 'Relación directa y regular',
            'practice_area_id' => 4
        ]);

        DB::table('subjects')->insert([
            'title' => 'Cuidado personal',
            'practice_area_id' => 4
        ]);

        DB::table('subjects')->insert([
            'title' => 'Autorización para salida del país',
            'practice_area_id' => 4
        ]);

        DB::table('subjects')->insert([
            'title' => 'Medidas de protección',
            'practice_area_id' => 4
        ]);

        DB::table('subjects')->insert([
            'title' => 'Adopción',
            'practice_area_id' => 4
        ]);

        DB::table('subjects')->insert([
            'title' => 'Reclamación o impugnación de paternidad',
            'practice_area_id' => 4
        ]);

        DB::table('subjects')->insert([
            'title' => 'Despido injustificado',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Auto despido',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Tutela laboral',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Cobranza laboral',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Mediación laboral',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Acoso laboral',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Indemnizaciones por despido',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Cobranza de cotizaciones',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Fuero maternal',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Otros',
            'practice_area_id' => 5
        ]);

        DB::table('subjects')->insert([
            'title' => 'Mediación',
            'practice_area_id' => 6
        ]);

        DB::table('subjects')->insert([
            'title' => 'Otros',
            'practice_area_id' => 6
        ]);

        DB::table('subjects')->insert([
            'title' => 'Audiencia de control de detención',
            'practice_area_id' => 7
        ]);

        DB::table('subjects')->insert([
            'title' => 'Juicio oral',
            'practice_area_id' => 7
        ]);

        DB::table('subjects')->insert([
            'title' => 'Juicio simplificado',
            'practice_area_id' => 7
        ]);

        DB::table('subjects')->insert([
            'title' => 'Juicio monitorio',
            'practice_area_id' => 7
        ]);

        DB::table('subjects')->insert([
            'title' => 'Suspensión condicional del procedimiento',
            'practice_area_id' => 7
        ]);

        DB::table('subjects')->insert([
            'title' => 'Eliminación de antecedentes penales',
            'practice_area_id' => 7
        ]);

        DB::table('subjects')->insert([
            'title' => 'Delitos contra la persona',
            'practice_area_id' => 7
        ]);

        DB::table('subjects')->insert([
            'title' => 'Delitos contra la propiedad',
            'practice_area_id' => 7
        ]);

        DB::table('subjects')->insert([
            'title' => 'Estafas',
            'practice_area_id' => 7
        ]);

        DB::table('subjects')->insert([
            'title' => 'Infracción a la ley de tránsito (choques, multas)',
            'practice_area_id' => 8
        ]);

        DB::table('subjects')->insert([
            'title' => 'Prescripción de multas',
            'practice_area_id' => 8
        ]);

        DB::table('subjects')->insert([
            'title' => 'Infracción a la ley del consumidor',
            'practice_area_id' => 8
        ]);

        DB::table('subjects')->insert([
            'title' => 'Indemnización de perjuicios',
            'practice_area_id' => 8
        ]);

        DB::table('subjects')->insert([
            'title' => 'Infracción a la ley de copropiedad inmobiliaria',
            'practice_area_id' => 8
        ]);
    }
}
