<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data\results\subResults\sfaceDataList;

use AlibabaCloud\Tea\Model;

class faces extends Model
{
    public $name;
    public $rate;
    public $id;
    protected $_required = [
        'name' => true,
        'rate' => true,
        'id'   => true,
    ];
    protected $_name = [
        'name' => 'Name',
        'rate' => 'Rate',
        'id'   => 'Id',
    ];
    protected $_description = [
        'name' => 'name',
        'rate' => 'rate',
        'id'   => 'id',
    ];
}
