<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\ListFacesResponse\data;

use AlibabaCloud\Tea\Model;

class faceList extends Model
{
    public $faceId;
    public $extraData;
    public $entityId;
    public $imageUrl;
    protected $_required = [
        'faceId'    => true,
        'extraData' => true,
        'entityId'  => true,
        'imageUrl'  => true,
    ];
    protected $_name = [
        'faceId'    => 'FaceId',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
        'imageUrl'  => 'ImageUrl',
    ];
    protected $_description = [
        'faceId'    => 'faceId',
        'extraData' => 'extraData',
        'entityId'  => 'entityId',
        'imageUrl'  => 'imageUrl',
    ];
}
