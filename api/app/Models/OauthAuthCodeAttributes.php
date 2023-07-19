<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class OauthAuthCodeAttributes extends ModelAttributes
{
	 const CLIENT_ID = 'client_id';
	 const EXPIRES_AT = 'expires_at';
	 const ID = 'id';
	 const REVOKED = 'revoked';
	 const SCOPES = 'scopes';
	 const USER_ID = 'user_id';
}