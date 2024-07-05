<?php

namespace App\Models;

use Core\Database\ActiveRecord\BelongsToMany;
use Core\Database\ActiveRecord\HasMany;
use Lib\Validations;
use Core\Database\ActiveRecord\Model;

/**
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property User $user
 * @property User[] $reinforced_by_users
 */
class Admin extends Model
{
    protected static string $table = 'admins';
    protected static array $columns = ['name', 'email', 'encrypted_password'];

    protected ?string $password = null;
    protected ?string $password_confirmation = null;

    public function schedules(): HasMany{
        return $this->hasMany(Schedules::class, 'user_id');
    }

    public function reinforcedProblems(): BelongsToMany
    {
        return $this->belongsToMany(Problem::class, 'problem_user_reinforce', 'user_id', 'problem_id');
    }

    public function validates(): void
    {
        Validations::notEmpty('name', $this);
        Validations::notEmpty('email', $this);
    }

    public static function findByEmail(string $email): Admin | null
    {
        return Admin::findBy(['email' => $email]);
    }

    public function authenticate(string $password): bool
    {
        if ($this->encrypted_password == null) {
            return false;
        }

        return password_verify($password, $this->encrypted_password);
    }

    public function __set(string $property, mixed $value): void
    {
        parent::__set($property, $value);

        if (
            $property === 'password' &&
            $this->newRecord() &&
            $value !== null && $value !== ''
        ) {
            $this->encrypted_password = password_hash($value, PASSWORD_DEFAULT);
        }
    }
}

/*
/**
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property User $user
 * @property User[] $reinforced_by_users
 */
/*
class Problem extends Model
{
    protected static string $table = 'problems';
    protected static array $columns = ['title', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reinforcedByUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'problem_user_reinforce', 'problem_id', 'user_id');
    }

    public function validates(): void
    {
        Validations::notEmpty('title', $this);
    }

    public function isSupportedByUser(User $user): bool
    {
        return ProblemUserReinforce::exists(['problem_id' => $this->id, 'user_id' => $user->id]);
    }
}
*/
