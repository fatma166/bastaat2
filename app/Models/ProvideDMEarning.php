<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProvideDMEarning
 * 
 * @property int $id
 * @property int $delivery_man_id
 * @property float $amount
 * @property string|null $method
 * @property string|null $ref
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ProvideDMEarning extends Model
{
	protected $table = 'provide_d_m_earnings';

	protected $casts = [
		'delivery_man_id' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'delivery_man_id',
		'amount',
		'method',
		'ref'
	];
}
