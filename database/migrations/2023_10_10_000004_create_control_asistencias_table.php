use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlAsistenciasTable extends Migration
{
    public function up()
    {
        Schema::create('control_asistencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('miembro_id')->constrained('miembros');
            $table->foreignId('clase_id')->constrained('clases');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('control_asistencias');
    }
}
