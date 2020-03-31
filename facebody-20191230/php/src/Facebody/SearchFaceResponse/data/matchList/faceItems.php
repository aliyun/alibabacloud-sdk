<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\SearchFaceResponse\data\matchList;

use AlibabaCloud\Tea\Model;

class faceItems extends Model
{
    public $faceId;
    public $score;
    public $extraData;
    public $entityId;
    public $imageUrl;
    protected $_required = [
        'faceId'    => true,
        'score'     => true,
        'extraData' => true,
        'entityId'  => true,
        'imageUrl'  => true,
    ];
    protected $_name = [
        'faceId'    => 'FaceId',
        'score'     => 'Score',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
        'imageUrl'  => 'ImageUrl',
    ];
    protected $_description = [
        'faceId'    => 'faceId',
        'score'     => 'score',
        'extraData' => 'extraData',
        'entityId'  => 'entityId',
        'imageUrl'  => 'imageUrl',
    ];
}
