<?php
namespace App\Models;
use MennoVanHout\LaravelModelConstants\Types\ModelAttributes;
class FailedJobAttributes extends ModelAttributes
{
	 const ID = 'id';
	 const UUID = 'uuid';
	 const CONNECTION = 'connection';
	 const QUEUE = 'queue';
	 const PAYLOAD = 'payload';
	 const EXCEPTION = 'exception';
	 const FAILED_AT = 'failed_at';
}