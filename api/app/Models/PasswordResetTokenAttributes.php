<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class PasswordResetTokenAttributes extends ModelAttributes
{
	 const EMAIL = 'email';
	 const TOKEN = 'token';
	 const CREATED_AT = 'created_at';
}