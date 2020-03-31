<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizePublicFaceResponse\data\elements\results\subResults;

use AlibabaCloud\Tea\Model;

class faces extends Model
{
    public $id;
    public $name;
    public $rate;
    protected $_required = [
        'id'   => true,
        'name' => true,
        'rate' => true,
    ];
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
        'rate' => 'Rate',
    ];
    protected $_description = [
        'id'   => 'id',
        'name' => 'name',
        'rate' => 'rate',
    ];
}
