<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TelescopeEntry
 * 
 * @property int $sequence
 * @property string $uuid
 * @property string $batch_id
 * @property string|null $family_hash
 * @property bool $should_display_on_index
 * @property string $type
 * @property string $content
 * @property Carbon|null $created_at
 * 
 * @property TelescopeEntriesTag $telescope_entries_tag
 *
 * @package App\Models
 */
class TelescopeEntry extends Model
{
	protected $table = 'telescope_entries';
	protected $primaryKey = 'sequence';
	public $timestamps = false;

	protected $casts = [
		'should_display_on_index' => 'bool'
	];

	protected $fillable = [
		'uuid',
		'batch_id',
		'family_hash',
		'should_display_on_index',
		'type',
		'content'
	];

	public function telescope_entries_tag()
	{
		return $this->hasOne(TelescopeEntriesTag::class, 'entry_uuid', 'uuid');
	}
}
