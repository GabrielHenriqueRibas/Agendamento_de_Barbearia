<?php

namespace App\Models;

use Lib\Validations;
use Core\Database\ActiveRecord\Model;
use Core\Database\ActiveRecord\BelongsToMany;
use Core\Database\ActiveRecord\HasMany;

/**
 * @property int $id
 * @property string $barber
 * @property string $service
 * @property string $date
 * @property string $local
 */

class Scheduling extends Model
{
    protected static string $table = 'schedules';
    protected static array $columns = ['barber', 'service', 'date_scheduling', 'local', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function validates(): void
    {
        Validations::notEmpty('barber', $this);
        Validations::notEmpty('service', $this);
    }
}