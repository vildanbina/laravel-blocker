<?php

namespace bexvibi\LaravelBlocker\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BlockedType
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BlockedItem[] $blockedItems
 * @property-read int|null $blocked_items_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedType newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BlockedType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedType query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlockedType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BlockedType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BlockedType withoutTrashed()
 * @mixin \Eloquent
 */
class BlockedType extends Model
{
    use SoftDeletes;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blocker_types';
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Fillable fields.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'name',
    ];

    protected $casts = [
        'slug' => 'string',
        'name' => 'string',
    ];

    /**
     * Get the blockedItems for the BlockedType.
     */
    public function blockedItems()
    {
        return $this->hasMany(BlockedItem::class);
    }
}
