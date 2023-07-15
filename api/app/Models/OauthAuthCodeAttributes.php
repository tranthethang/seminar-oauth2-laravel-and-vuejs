<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class OauthAuthCodeAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const USER_ID = 'user_id';
	 const CLIENT_ID = 'client_id';
	 const SCOPES = 'scopes';
	 const REVOKED = 'revoked';
	 const EXPIRES_AT = 'expires_at';
}