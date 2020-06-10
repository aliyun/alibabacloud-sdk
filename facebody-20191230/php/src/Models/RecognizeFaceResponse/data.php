<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description faceCount
     *
     * @var int
     */
    public $faceCount;

    /**
     * @description landmarkCount
     *
     * @var int
     */
    public $landmarkCount;

    /**
     * @description denseFeatureLength
     *
     * @var int
     */
    public $denseFeatureLength;

    /**
     * @description faceRectangles
     *
     * @var array
     */
    public $faceRectangles;

    /**
     * @description faceProbabilityList
     *
     * @var array
     */
    public $faceProbabilityList;

    /**
     * @description poseList
     *
     * @var array
     */
    public $poseList;

    /**
     * @description landmarks
     *
     * @var array
     */
    public $landmarks;

    /**
     * @description pupils
     *
     * @var array
     */
    public $pupils;

    /**
     * @description genderList
     *
     * @var array
     */
    public $genderList;

    /**
     * @description ageList
     *
     * @var array
     */
    public $ageList;

    /**
     * @description expressions
     *
     * @var array
     */
    public $expressions;

    /**
     * @description glasses
     *
     * @var array
     */
    public $glasses;

    /**
     * @description denseFeatures
     *
     * @var array
     */
    public $denseFeatures;
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

    public function validate()
    {
        Model::validateRequired('faceCount', $this->faceCount, true);
        Model::validateRequired('landmarkCount', $this->landmarkCount, true);
        Model::validateRequired('denseFeatureLength', $this->denseFeatureLength, true);
        Model::validateRequired('faceRectangles', $this->faceRectangles, true);
        Model::validateRequired('faceProbabilityList', $this->faceProbabilityList, true);
        Model::validateRequired('poseList', $this->poseList, true);
        Model::validateRequired('landmarks', $this->landmarks, true);
        Model::validateRequired('pupils', $this->pupils, true);
        Model::validateRequired('genderList', $this->genderList, true);
        Model::validateRequired('ageList', $this->ageList, true);
        Model::validateRequired('expressions', $this->expressions, true);
        Model::validateRequired('glasses', $this->glasses, true);
        Model::validateRequired('denseFeatures', $this->denseFeatures, true);
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
        if (null !== $this->denseFeatureLength) {
            $res['DenseFeatureLength'] = $this->denseFeatureLength;
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
        if (null !== $this->genderList) {
            $res['GenderList'] = [];
            if (null !== $this->genderList) {
                $res['GenderList'] = $this->genderList;
            }
        }
        if (null !== $this->ageList) {
            $res['AgeList'] = [];
            if (null !== $this->ageList) {
                $res['AgeList'] = $this->ageList;
            }
        }
        if (null !== $this->expressions) {
            $res['Expressions'] = [];
            if (null !== $this->expressions) {
                $res['Expressions'] = $this->expressions;
            }
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = [];
            if (null !== $this->glasses) {
                $res['Glasses'] = $this->glasses;
            }
        }
        if (null !== $this->denseFeatures) {
            $res['DenseFeatures'] = [];
            if (null !== $this->denseFeatures) {
                $res['DenseFeatures'] = $this->denseFeatures;
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
        if (isset($map['DenseFeatureLength'])) {
            $model->denseFeatureLength = $map['DenseFeatureLength'];
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
        if (isset($map['GenderList'])) {
            if (!empty($map['GenderList'])) {
                $model->genderList = [];
                $model->genderList = $map['GenderList'];
            }
        }
        if (isset($map['AgeList'])) {
            if (!empty($map['AgeList'])) {
                $model->ageList = [];
                $model->ageList = $map['AgeList'];
            }
        }
        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = [];
                $model->expressions = $map['Expressions'];
            }
        }
        if (isset($map['Glasses'])) {
            if (!empty($map['Glasses'])) {
                $model->glasses = [];
                $model->glasses = $map['Glasses'];
            }
        }
        if (isset($map['DenseFeatures'])) {
            if (!empty($map['DenseFeatures'])) {
                $model->denseFeatures = [];
                $model->denseFeatures = $map['DenseFeatures'];
            }
        }

        return $model;
    }
}
