<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeFaceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $faceCount;
    public $landmarkCount;
    public $denseFeatureLength;
    public $faceRectangles;
    public $faceProbabilityList;
    public $poseList;
    public $landmarks;
    public $pupils;
    public $genderList;
    public $ageList;
    public $expressions;
    public $glasses;
    public $denseFeatures;
    protected $_required = [
        'faceCount'           => true,
        'landmarkCount'       => true,
        'denseFeatureLength'  => true,
        'faceRectangles'      => true,
        'faceProbabilityList' => true,
        'poseList'            => true,
        'landmarks'           => true,
        'pupils'              => true,
        'genderList'          => true,
        'ageList'             => true,
        'expressions'         => true,
        'glasses'             => true,
        'denseFeatures'       => true,
    ];
    protected $_name = [
        'faceCount'           => 'FaceCount',
        'landmarkCount'       => 'LandmarkCount',
        'denseFeatureLength'  => 'DenseFeatureLength',
        'faceRectangles'      => 'FaceRectangles',
        'faceProbabilityList' => 'FaceProbabilityList',
        'poseList'            => 'PoseList',
        'landmarks'           => 'Landmarks',
        'pupils'              => 'Pupils',
        'genderList'          => 'GenderList',
        'ageList'             => 'AgeList',
        'expressions'         => 'Expressions',
        'glasses'             => 'Glasses',
        'denseFeatures'       => 'DenseFeatures',
    ];
    protected $_description = [
        'faceCount'           => 'faceCount',
        'landmarkCount'       => 'landmarkCount',
        'denseFeatureLength'  => 'denseFeatureLength',
        'faceRectangles'      => 'faceRectangles',
        'faceProbabilityList' => 'faceProbabilityList',
        'poseList'            => 'poseList',
        'landmarks'           => 'landmarks',
        'pupils'              => 'pupils',
        'genderList'          => 'genderList',
        'ageList'             => 'ageList',
        'expressions'         => 'expressions',
        'glasses'             => 'glasses',
        'denseFeatures'       => 'denseFeatures',
    ];
}
