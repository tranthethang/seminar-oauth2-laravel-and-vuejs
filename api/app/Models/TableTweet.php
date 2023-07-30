<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TableTweet
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $content
 * @property int $user_id
 *
 * @package App\Models
 */
class TableTweet extends Model
{
	protected $table = 'table_tweets';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'content',
		'user_id'
	];
}
