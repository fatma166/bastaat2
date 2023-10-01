<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $parent_id
 * @property int $position
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $priority
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $casts = [
		'parent_id' => 'int',
		'position' => 'int',
		'status' => 'bool',
		'priority' => 'int'
	];

	protected $fillable = [
		'name',
		'image',
		'parent_id',
		'position',
		'status',
		'priority'
	];
}
