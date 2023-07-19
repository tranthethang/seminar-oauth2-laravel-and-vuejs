<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class OauthAccessTokenAttributes extends ModelAttributes
{
	 const CLIENT_ID = 'client_id';
	 const CREATED_AT = 'created_at';
	 const EXPIRES_AT = 'expires_at';
	 const ID = 'id';
	 const NAME = 'name';
	 const REVOKED = 'revoked';
	 const SCOPES = 'scopes';
	 const UPDATED_AT = 'updated_at';
	 const USER_ID = 'user_id';
}