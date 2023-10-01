<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $image
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $tergat
 * @property int|null $zone_id
 *
 * @package App\Models
 */
class Notification extends Model
{
	protected $table = 'notifications';

	protected $casts = [
		'status' => 'bool',
		'zone_id' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'image',
		'status',
		'tergat',
		'zone_id'
	];
}
