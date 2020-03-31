<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\ListImagesResponse\data;

use AlibabaCloud\Tea\Model;

class imageList extends Model
{
    public $dataId;
    public $extraData;
    public $imageUrl;
    public $entityId;
    protected $_required = [
        'dataId'    => true,
        'extraData' => true,
        'imageUrl'  => true,
        'entityId'  => true,
    ];
    protected $_name = [
        'dataId'    => 'DataId',
        'extraData' => 'ExtraData',
        'imageUrl'  => 'ImageUrl',
        'entityId'  => 'EntityId',
    ];
    protected $_description = [
        'dataId'    => 'dataId',
        'extraData' => 'extraData',
        'imageUrl'  => 'imageUrl',
        'entityId'  => 'entityId',
    ];
}
