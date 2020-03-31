<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectFaceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $faceCount;
    public $landmarkCount;
    public $faceRectangles;
    public $faceProbabilityList;
    public $poseList;
    public $landmarks;
    public $pupils;
    protected $_required = [
        'faceCount'           => true,
        'landmarkCount'       => true,
        'faceRectangles'      => true,
        'faceProbabilityList' => true,
        'poseList'            => true,
        'landmarks'           => true,
        'pupils'              => true,
    ];
    protected $_name = [
        'faceCount'           => 'FaceCount',
        'landmarkCount'       => 'LandmarkCount',
        'faceRectangles'      => 'FaceRectangles',
        'faceProbabilityList' => 'FaceProbabilityList',
        'poseList'            => 'PoseList',
        'landmarks'           => 'Landmarks',
        'pupils'              => 'Pupils',
    ];
    protected $_description = [
        'faceCount'           => 'faceCount',
        'landmarkCount'       => 'landmarkCount',
        'faceRectangles'      => 'faceRectangles',
        'faceProbabilityList' => 'faceProbability',
        'poseList'            => 'pose',
        'landmarks'           => 'landmarks',
        'pupils'              => 'pupils',
    ];
}
