namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlAsistencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'miembro_id',
        'clase_id',
        'fecha',
    ];
}
