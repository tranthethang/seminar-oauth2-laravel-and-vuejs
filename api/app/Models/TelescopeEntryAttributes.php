<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class TelescopeEntryAttributes extends ModelAttributes
{
	 const SEQUENCE = 'sequence';
	 const UUID = 'uuid';
	 const BATCH_ID = 'batch_id';
	 const FAMILY_HASH = 'family_hash';
	 const SHOULD_DISPLAY_ON_INDEX = 'should_display_on_index';
	 const TYPE = 'type';
	 const CONTENT = 'content';
	 const CREATED_AT = 'created_at';
}