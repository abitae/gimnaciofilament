use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembrosTable extends Migration
{
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('miembros');
    }
}
