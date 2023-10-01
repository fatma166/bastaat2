<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Conversation
 * 
 * @property int $id
 * @property int|null $sender_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $sender_type
 * @property int $receiver_id
 * @property string $receiver_type
 * @property int|null $last_message_id
 * @property Carbon|null $last_message_time
 * @property int $unread_message_count
 *
 * @package App\Models
 */
class Conversation extends Model
{
	protected $table = 'conversations';

	protected $casts = [
		'sender_id' => 'int',
		'receiver_id' => 'int',
		'last_message_id' => 'int',
		'last_message_time' => 'datetime',
		'unread_message_count' => 'int'
	];

	protected $fillable = [
		'sender_id',
		'sender_type',
		'receiver_id',
		'receiver_type',
		'last_message_id',
		'last_message_time',
		'unread_message_count'
	];
}
