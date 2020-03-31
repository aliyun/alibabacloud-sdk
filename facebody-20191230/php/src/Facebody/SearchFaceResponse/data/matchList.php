<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\SearchFaceResponse\data;

use AlibabaCloud\Tea\Model;

class matchList extends Model
{
    public $faceItems;
    public $location;
    protected $_required = [
        'faceItems' => true,
        'location'  => true,
    ];
    protected $_name = [
        'faceItems' => 'FaceItems',
        'location'  => 'Location',
    ];
    protected $_description = [
        'faceItems' => 'faceItems',
        'location'  => 'location',
    ];
}
