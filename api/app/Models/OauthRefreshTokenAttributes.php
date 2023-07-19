<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class OauthRefreshTokenAttributes extends ModelAttributes
{
	 const ACCESS_TOKEN_ID = 'access_token_id';
	 const EXPIRES_AT = 'expires_at';
	 const ID = 'id';
	 const REVOKED = 'revoked';
}