<?php

namespace vildanbina\LaravelBlocker\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BlockedItem
 *
 * @property int $id
 * @property int $typeId
 * @property string $value
 * @property string|null $note
 * @property int|null $userId
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\BlockedType $blockedType
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BlockedItem onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedItem whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BlockedItem withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BlockedItem withoutTrashed()
 * @mixin \Eloquent
 */
class BlockedItem extends Model
{
    use SoftDeletes;

    public $timestamps = true;
    public $primaryName = 'value';
    protected $table = 'blocker';
    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['typeId', 'value', 'note', 'userId'];

    protected $casts = ['typeId' => 'integer', 'value' => 'string', 'note' => 'string', 'userId' => 'integer'];


    public function blockedType()
    {
        return $this->belongsTo(BlockedType::class, 'typeId');
    }
}
