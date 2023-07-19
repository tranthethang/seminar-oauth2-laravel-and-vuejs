<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class PasswordResetTokenAttributes extends ModelAttributes
{
	 const CREATED_AT = 'created_at';
	 const EMAIL = 'email';
	 const TOKEN = 'token';
}