<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch;

use AlibabaCloud\Tea\Model;

class AddImageAdvanceRequest extends Model
{
    public $imageUrlObject;
    public $dbName;
    public $dataId;
    public $extraData;
    public $entityId;
    protected $_required = [
        'imageUrlObject' => true,
        'dbName'         => true,
        'dataId'         => true,
        'entityId'       => true,
    ];
    protected $_description = [
        'imageUrlObject' => 'ImageUrlObject',
        'dbName'         => 'dbName',
        'dataId'         => 'dataId',
        'extraData'      => 'extraData',
        'entityId'       => 'entityId',
    ];
    protected $_name = [
        'imageUrlObject' => 'ImageUrlObject',
        'dbName'         => 'DbName',
        'dataId'         => 'DataId',
        'extraData'      => 'ExtraData',
        'entityId'       => 'EntityId',
    ];
}
