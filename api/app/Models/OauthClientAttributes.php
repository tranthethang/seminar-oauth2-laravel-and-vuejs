<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class OauthClientAttributes extends ModelAttributes
{
	 const CREATED_AT = 'created_at';
	 const ID = 'id';
	 const NAME = 'name';
	 const PASSWORD_CLIENT = 'password_client';
	 const PERSONAL_ACCESS_CLIENT = 'personal_access_client';
	 const PROVIDER = 'provider';
	 const REDIRECT = 'redirect';
	 const REVOKED = 'revoked';
	 const SECRET = 'secret';
	 const UPDATED_AT = 'updated_at';
	 const USER_ID = 'user_id';
}