<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Banner
 * 
 * @property int $id
 * @property string $title
 * @property string $type
 * @property string|null $image
 * @property bool $status
 * @property string $data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $zone_id
 *
 * @package App\Models
 */
class Banner extends Model
{
	protected $table = 'banners';

	protected $casts = [
		'status' => 'bool',
		'zone_id' => 'int'
	];

	protected $fillable = [
		'title',
		'type',
		'image',
		'status',
		'data',
		'zone_id'
	];
}
