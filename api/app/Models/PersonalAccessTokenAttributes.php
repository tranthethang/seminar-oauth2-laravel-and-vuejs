<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class PersonalAccessTokenAttributes extends ModelAttributes
{
	 const ABILITIES = 'abilities';
	 const CREATED_AT = 'created_at';
	 const EXPIRES_AT = 'expires_at';
	 const ID = 'id';
	 const LAST_USED_AT = 'last_used_at';
	 const NAME = 'name';
	 const TOKEN = 'token';
	 const TOKENABLE_ID = 'tokenable_id';
	 const TOKENABLE_TYPE = 'tokenable_type';
	 const UPDATED_AT = 'updated_at';
}