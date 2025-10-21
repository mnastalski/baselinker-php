<?php

namespace Baselinker\Api\Enum;

enum InventoryDocumentType: int
{
    case GoodsReceived = 0;
    case InternalGoodsReceived = 1;
    case GoodsIssue = 2;
    case InternalGoodsIssue = 3;
    case InternalTransfer = 4;
    case OpeningBalance = 5;
}
