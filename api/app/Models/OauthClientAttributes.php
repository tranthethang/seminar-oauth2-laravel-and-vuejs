<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class OauthClientAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const USER_ID = 'user_id';
	 const NAME = 'name';
	 const SECRET = 'secret';
	 const PROVIDER = 'provider';
	 const REDIRECT = 'redirect';
	 const PERSONAL_ACCESS_CLIENT = 'personal_access_client';
	 const PASSWORD_CLIENT = 'password_client';
	 const REVOKED = 'revoked';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
}