<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class OauthRefreshTokenAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const ACCESS_TOKEN_ID = 'access_token_id';
	 const REVOKED = 'revoked';
	 const EXPIRES_AT = 'expires_at';
}