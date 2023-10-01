<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int|null $user_id
 * @property float $order_amount
 * @property float $coupon_discount_amount
 * @property float $restaurant_discount_amount
 * @property float $original_delivery_charge
 * @property string|null $coupon_discount_title
 * @property string $payment_status
 * @property string $order_status
 * @property float $total_tax_amount
 * @property string|null $payment_method
 * @property string|null $transaction_reference
 * @property int|null $delivery_address_id
 * @property int|null $delivery_man_id
 * @property string|null $coupon_code
 * @property string|null $order_note
 * @property string $order_type
 * @property bool $checked
 * @property int $restaurant_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property float $delivery_charge
 * @property Carbon|null $schedule_at
 * @property string|null $callback
 * @property string|null $otp
 * @property Carbon|null $pending
 * @property Carbon|null $accepted
 * @property Carbon|null $confirmed
 * @property Carbon|null $processing
 * @property Carbon|null $handover
 * @property Carbon|null $picked_up
 * @property Carbon|null $delivered
 * @property Carbon|null $canceled
 * @property Carbon|null $refund_requested
 * @property Carbon|null $refunded
 * @property string|null $delivery_address
 * @property bool $scheduled
 * @property Carbon|null $failed
 * @property float $adjusment
 * @property bool $edited
 * @property int|null $zone_id
 * @property float $dm_tips
 * @property string|null $processing_time
 * @property string|null $free_delivery_by
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int',
		'order_amount' => 'float',
		'coupon_discount_amount' => 'float',
		'restaurant_discount_amount' => 'float',
		'original_delivery_charge' => 'float',
		'total_tax_amount' => 'float',
		'delivery_address_id' => 'int',
		'delivery_man_id' => 'int',
		'checked' => 'bool',
		'restaurant_id' => 'int',
		'delivery_charge' => 'float',
		'schedule_at' => 'datetime',
		'pending' => 'datetime',
		'accepted' => 'datetime',
		'confirmed' => 'datetime',
		'processing' => 'datetime',
		'handover' => 'datetime',
		'picked_up' => 'datetime',
		'delivered' => 'datetime',
		'canceled' => 'datetime',
		'refund_requested' => 'datetime',
		'refunded' => 'datetime',
		'scheduled' => 'bool',
		'failed' => 'datetime',
		'adjusment' => 'float',
		'edited' => 'bool',
		'zone_id' => 'int',
		'dm_tips' => 'float'
	];

	protected $fillable = [
		'user_id',
		'order_amount',
		'coupon_discount_amount',
		'restaurant_discount_amount',
		'original_delivery_charge',
		'coupon_discount_title',
		'payment_status',
		'order_status',
		'total_tax_amount',
		'payment_method',
		'transaction_reference',
		'delivery_address_id',
		'delivery_man_id',
		'coupon_code',
		'order_note',
		'order_type',
		'checked',
		'restaurant_id',
		'delivery_charge',
		'schedule_at',
		'callback',
		'otp',
		'pending',
		'accepted',
		'confirmed',
		'processing',
		'handover',
		'picked_up',
		'delivered',
		'canceled',
		'refund_requested',
		'refunded',
		'delivery_address',
		'scheduled',
		'failed',
		'adjusment',
		'edited',
		'zone_id',
		'dm_tips',
		'processing_time',
		'free_delivery_by'
	];
}
