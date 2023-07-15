<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class PersonalAccessTokenAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const TOKENABLE_TYPE = 'tokenable_type';
	 const TOKENABLE_ID = 'tokenable_id';
	 const NAME = 'name';
	 const TOKEN = 'token';
	 const ABILITIES = 'abilities';
	 const LAST_USED_AT = 'last_used_at';
	 const EXPIRES_AT = 'expires_at';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}