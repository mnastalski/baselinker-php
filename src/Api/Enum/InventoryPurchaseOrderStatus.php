<?php

namespace Baselinker\Api\Enum;

enum InventoryPurchaseOrderStatus: int
{
    case Draft = 0;
    case Sent = 1;
    case Received = 2;
    case Completed = 3;
    case CompletedPartially = 4;
    case Canceled = 5;
}
