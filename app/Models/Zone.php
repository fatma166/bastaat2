<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Zone
 * 
 * @property int $id
 * @property string $name
 * @property polygon|null $coordinates
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $restaurant_wise_topic
 * @property string|null $customer_wise_topic
 * @property string|null $deliveryman_wise_topic
 * @property float|null $minimum_shipping_charge
 * @property float|null $per_km_shipping_charge
 *
 * @package App\Models
 */
class Zone extends Model
{
	protected $table = 'zones';

	protected $casts = [
		'coordinates' => 'polygon',
		'status' => 'bool',
		'minimum_shipping_charge' => 'float',
		'per_km_shipping_charge' => 'float'
	];

	protected $fillable = [
		'name',
		'coordinates',
		'status',
		'restaurant_wise_topic',
		'customer_wise_topic',
		'deliveryman_wise_topic',
		'minimum_shipping_charge',
		'per_km_shipping_charge'
	];
}
