<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class FailedJobAttributes extends ModelAttributes
{
	 const CONNECTION = 'connection';
	 const EXCEPTION = 'exception';
	 const FAILED_AT = 'failed_at';
	 const ID = 'id';
	 const PAYLOAD = 'payload';
	 const QUEUE = 'queue';
	 const UUID = 'uuid';
}