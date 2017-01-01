<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Todo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'todos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'due_at'];

    /**
     * A todo belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
