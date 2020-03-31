<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch;

use AlibabaCloud\Tea\Model;

class AddImageRequest extends Model
{
    public $dbName;
    public $dataId;
    public $imageUrl;
    public $extraData;
    public $entityId;
    protected $_required = [
        'dbName'   => true,
        'dataId'   => true,
        'imageUrl' => true,
        'entityId' => true,
    ];
    protected $_name = [
        'dbName'    => 'DbName',
        'dataId'    => 'DataId',
        'imageUrl'  => 'ImageUrl',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
    ];
    protected $_description = [
        'dbName'    => 'dbName',
        'dataId'    => 'dataId',
        'imageUrl'  => 'imageUrl',
        'extraData' => 'extraData',
        'entityId'  => 'entityId',
    ];
}
