<?php

namespace Baselinker\Api\Enum;

enum OrderMergeMode: string
{
    case TechnicalMerge = 'technical_merge';
    case IntoMainOrder = 'into_main_order';
}
