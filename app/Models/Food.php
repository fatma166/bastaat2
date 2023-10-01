<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Food
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $image
 * @property int|null $category_id
 * @property string|null $category_ids
 * @property string|null $variations
 * @property string|null $add_ons
 * @property string|null $attributes
 * @property string|null $choice_options
 * @property float $price
 * @property float $tax
 * @property string $tax_type
 * @property float $discount
 * @property string $discount_type
 * @property Carbon|null $available_time_starts
 * @property Carbon|null $available_time_ends
 * @property bool $veg
 * @property bool $status
 * @property int $restaurant_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $order_count
 * @property float $avg_rating
 * @property int $rating_count
 * @property string|null $rating
 *
 * @package App\Models
 */
class Food extends Model
{
	protected $table = 'food';

	protected $casts = [
		'category_id' => 'int',
		'price' => 'float',
		'tax' => 'float',
		'discount' => 'float',
		'available_time_starts' => 'datetime',
		'available_time_ends' => 'datetime',
		'veg' => 'bool',
		'status' => 'bool',
		'restaurant_id' => 'int',
		'order_count' => 'int',
		'avg_rating' => 'float',
		'rating_count' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'image',
		'category_id',
		'category_ids',
		'variations',
		'add_ons',
		'attributes',
		'choice_options',
		'price',
		'tax',
		'tax_type',
		'discount',
		'discount_type',
		'available_time_starts',
		'available_time_ends',
		'veg',
		'status',
		'restaurant_id',
		'order_count',
		'avg_rating',
		'rating_count',
		'rating'
	];
}
