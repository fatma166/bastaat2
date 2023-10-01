<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string|null $f_name
 * @property string|null $l_name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $image
 * @property bool $is_phone_verified
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $email_verification_token
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $interest
 * @property string|null $cm_firebase_token
 * @property bool $status
 * @property int $order_count
 * @property string|null $login_medium
 * @property string|null $social_id
 * @property int|null $zone_id
 * @property float $wallet_balance
 * @property float $loyalty_point
 * @property string|null $ref_code
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'is_phone_verified' => 'bool',
		'email_verified_at' => 'datetime',
		'status' => 'bool',
		'order_count' => 'int',
		'zone_id' => 'int',
		'wallet_balance' => 'float',
		'loyalty_point' => 'float'
	];

	protected $hidden = [
		'password',
		'email_verification_token',
		'remember_token',
		'cm_firebase_token'
	];

	protected $fillable = [
		'f_name',
		'l_name',
		'phone',
		'email',
		'image',
		'is_phone_verified',
		'email_verified_at',
		'password',
		'email_verification_token',
		'remember_token',
		'interest',
		'cm_firebase_token',
		'status',
		'order_count',
		'login_medium',
		'social_id',
		'zone_id',
		'wallet_balance',
		'loyalty_point',
		'ref_code'
	];
}
