<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $faceCount;

    /**
     * @var int
     */
    public $landmarkCount;

    /**
     * @var array
     */
    public $faceRectangles;

    /**
     * @var array
     */
    public $faceProbabilityList;

    /**
     * @var array
     */
    public $poseList;

    /**
     * @var array
     */
    public $landmarks;

    /**
     * @var array
     */
    public $pupils;
    protected $_name = [
        'faceCount'           => 'FaceCount',
        'landmarkCount'       => 'LandmarkCount',
        'faceRectangles'      => 'FaceRectangles',
        'faceProbabilityList' => 'FaceProbabilityList',
        'poseList'            => 'PoseList',
        'landmarks'           => 'Landmarks',
        'pupils'              => 'Pupils',
    ];

    public function validate()
    {
        Model::validateRequired('faceCount', $this->faceCount, true);
        Model::validateRequired('landmarkCount', $this->landmarkCount, true);
        Model::validateRequired('faceRectangles', $this->faceRectangles, true);
        Model::validateRequired('faceProbabilityList', $this->faceProbabilityList, true);
        Model::validateRequired('poseList', $this->poseList, true);
        Model::validateRequired('landmarks', $this->landmarks, true);
        Model::validateRequired('pupils', $this->pupils, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->landmarkCount) {
            $res['LandmarkCount'] = $this->landmarkCount;
        }
        if (null !== $this->faceRectangles) {
            $res['FaceRectangles'] = [];
            if (null !== $this->faceRectangles) {
                $res['FaceRectangles'] = $this->faceRectangles;
            }
        }
        if (null !== $this->faceProbabilityList) {
            $res['FaceProbabilityList'] = [];
            if (null !== $this->faceProbabilityList) {
                $res['FaceProbabilityList'] = $this->faceProbabilityList;
            }
        }
        if (null !== $this->poseList) {
            $res['PoseList'] = [];
            if (null !== $this->poseList) {
                $res['PoseList'] = $this->poseList;
            }
        }
        if (null !== $this->landmarks) {
            $res['Landmarks'] = [];
            if (null !== $this->landmarks) {
                $res['Landmarks'] = $this->landmarks;
            }
        }
        if (null !== $this->pupils) {
            $res['Pupils'] = [];
            if (null !== $this->pupils) {
                $res['Pupils'] = $this->pupils;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['LandmarkCount'])) {
            $model->landmarkCount = $map['LandmarkCount'];
        }
        if (isset($map['FaceRectangles'])) {
            if (!empty($map['FaceRectangles'])) {
                $model->faceRectangles = [];
                $model->faceRectangles = $map['FaceRectangles'];
            }
        }
        if (isset($map['FaceProbabilityList'])) {
            if (!empty($map['FaceProbabilityList'])) {
                $model->faceProbabilityList = [];
                $model->faceProbabilityList = $map['FaceProbabilityList'];
            }
        }
        if (isset($map['PoseList'])) {
            if (!empty($map['PoseList'])) {
                $model->poseList = [];
                $model->poseList = $map['PoseList'];
            }
        }
        if (isset($map['Landmarks'])) {
            if (!empty($map['Landmarks'])) {
                $model->landmarks = [];
                $model->landmarks = $map['Landmarks'];
            }
        }
        if (isset($map['Pupils'])) {
            if (!empty($map['Pupils'])) {
                $model->pupils = [];
                $model->pupils = $map['Pupils'];
            }
        }

        return $model;
    }
}
