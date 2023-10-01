<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Restaurant
 * 
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $email
 * @property string|null $logo
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $address
 * @property string|null $footer_text
 * @property float $minimum_order
 * @property float|null $comission
 * @property Carbon|null $opening_time
 * @property Carbon|null $closeing_time
 * @property bool $free_delivery
 * @property bool $status
 * @property int $vendor_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $rating
 * @property string|null $cover_photo
 * @property bool $delivery
 * @property bool $take_away
 * @property bool $schedule_order
 * @property bool $food_section
 * @property float $tax
 * @property int|null $zone_id
 * @property bool $reviews_section
 * @property bool $active
 * @property string $off_day
 * @property string|null $gst
 * @property bool $self_delivery_system
 * @property bool $pos_system
 * @property float $delivery_charge
 * @property string|null $delivery_time
 * @property bool $veg
 * @property bool $non_veg
 * @property int $order_count
 * @property float $minimum_shipping_charge
 * @property float $per_km_shipping_charge
 *
 * @package App\Models
 */
class Restaurant extends Model
{
	protected $table = 'restaurants';

	protected $casts = [
		'minimum_order' => 'float',
		'comission' => 'float',
		'opening_time' => 'datetime',
		'closeing_time' => 'datetime',
		'free_delivery' => 'bool',
		'status' => 'bool',
		'vendor_id' => 'int',
		'delivery' => 'bool',
		'take_away' => 'bool',
		'schedule_order' => 'bool',
		'food_section' => 'bool',
		'tax' => 'float',
		'zone_id' => 'int',
		'reviews_section' => 'bool',
		'active' => 'bool',
		'self_delivery_system' => 'bool',
		'pos_system' => 'bool',
		'delivery_charge' => 'float',
		'veg' => 'bool',
		'non_veg' => 'bool',
		'order_count' => 'int',
		'minimum_shipping_charge' => 'float',
		'per_km_shipping_charge' => 'float'
	];

	protected $fillable = [
		'name',
		'phone',
		'email',
		'logo',
		'latitude',
		'longitude',
		'address',
		'footer_text',
		'minimum_order',
		'comission',
		'opening_time',
		'closeing_time',
		'free_delivery',
		'status',
		'vendor_id',
		'rating',
		'cover_photo',
		'delivery',
		'take_away',
		'schedule_order',
		'food_section',
		'tax',
		'zone_id',
		'reviews_section',
		'active',
		'off_day',
		'gst',
		'self_delivery_system',
		'pos_system',
		'delivery_charge',
		'delivery_time',
		'veg',
		'non_veg',
		'order_count',
		'minimum_shipping_charge',
		'per_km_shipping_charge'
	];
}
