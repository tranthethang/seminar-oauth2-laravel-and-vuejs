<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TableRelationship
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $follower_id
 * @property int $followed_id
 *
 * @package App\Models
 */
class TableRelationship extends Model
{
	protected $table = 'table_relationships';

	protected $casts = [
		'follower_id' => 'int',
		'followed_id' => 'int'
	];

	protected $fillable = [
		'follower_id',
		'followed_id'
	];
}
