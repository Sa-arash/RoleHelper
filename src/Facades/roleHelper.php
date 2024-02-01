<?php
namespace SaArash\Rolehelper\Facades;

 class roleHelper
{
 public function convert($role)
 {
    return config('RoleConfig.'.$role);
}
}

?>
