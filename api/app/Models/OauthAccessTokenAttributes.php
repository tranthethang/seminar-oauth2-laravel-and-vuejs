<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class OauthAccessTokenAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const USER_ID = 'user_id';
	 const CLIENT_ID = 'client_id';
	 const NAME = 'name';
	 const SCOPES = 'scopes';
	 const REVOKED = 'revoked';
	 const CREATED_AT = 'created_at';
	 const UPDATED_AT = 'updated_at';
	 const EXPIRES_AT = 'expires_at';
}