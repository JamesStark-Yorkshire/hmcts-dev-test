<?php

namespace App\Enums;

enum TaskStatuses: String
{
    case Pending = 'pending';
    case Draft = 'draft';
    case InProgress = 'in_progress';
    case Done = 'done';
    case Close = 'close';
}
