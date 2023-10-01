<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendor
 * 
 * @property int $id
 * @property string $f_name
 * @property string|null $l_name
 * @property string $phone
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property int|null $admin_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $bank_name
 * @property string|null $branch
 * @property string|null $holder_name
 * @property string|null $account_no
 * @property string|null $image
 * @property bool|null $status
 * @property string|null $firebase_token
 * @property string|null $auth_token
 *
 * @package App\Models
 */
class Vendor extends Model
{
	protected $table = 'vendors';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'admin_id' => 'int',
		'status' => 'bool'
	];

	protected $hidden = [
		'password',
		'remember_token',
		'firebase_token',
		'auth_token'
	];

	protected $fillable = [
		'f_name',
		'l_name',
		'phone',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'admin_id',
		'bank_name',
		'branch',
		'holder_name',
		'account_no',
		'image',
		'status',
		'firebase_token',
		'auth_token'
	];
}