<?php
namespace SaArash\Rolehelper\Facades;

use Illuminate\Support\Facades\Facade;

class roleFacad extends Facade
{
static protected function getFacadeAccessor(): string
{
 return 'RoleHelper';
}
}
