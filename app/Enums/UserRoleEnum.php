<?php

namespace App\Enums;

enum UserRoleEnum:string
{
    case PARENT = 'parent';
    case TEACHER = 'teacher';
    case STUDENT = 'student';
    case ADMIN = 'admin';
}
