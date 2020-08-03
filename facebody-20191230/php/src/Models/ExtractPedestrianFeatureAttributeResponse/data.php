<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttributeResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $objType;

    /**
     * @var float
     */
    public $objTypeScore;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var float
     */
    public $qualityScore;

    /**
     * @var string
     */
    public $upperColor;

    /**
     * @var float
     */
    public $upperColorScore;

    /**
     * @var string
     */
    public $upperType;

    /**
     * @var float
     */
    public $upperTypeScore;

    /**
     * @var string
     */
    public $lowerColor;

    /**
     * @var float
     */
    public $lowerColorScore;

    /**
     * @var string
     */
    public $lowerType;

    /**
     * @var float
     */
    public $lowerTypeScore;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var float
     */
    public $genderScore;

    /**
     * @var string
     */
    public $hair;

    /**
     * @var float
     */
    public $hairScore;

    /**
     * @var string
     */
    public $age;

    /**
     * @var float
     */
    public $ageScore;
    protected $_name = [
        'objType'         => 'ObjType',
        'objTypeScore'    => 'ObjTypeScore',
        'feature'         => 'Feature',
        'qualityScore'    => 'QualityScore',
        'upperColor'      => 'UpperColor',
        'upperColorScore' => 'UpperColorScore',
        'upperType'       => 'UpperType',
        'upperTypeScore'  => 'UpperTypeScore',
        'lowerColor'      => 'LowerColor',
        'lowerColorScore' => 'LowerColorScore',
        'lowerType'       => 'LowerType',
        'lowerTypeScore'  => 'LowerTypeScore',
        'gender'          => 'Gender',
        'genderScore'     => 'GenderScore',
        'hair'            => 'Hair',
        'hairScore'       => 'HairScore',
        'age'             => 'Age',
        'ageScore'        => 'AgeScore',
    ];

    public function validate()
    {
        Model::validateRequired('objType', $this->objType, true);
        Model::validateRequired('objTypeScore', $this->objTypeScore, true);
        Model::validateRequired('feature', $this->feature, true);
        Model::validateRequired('qualityScore', $this->qualityScore, true);
        Model::validateRequired('upperColor', $this->upperColor, true);
        Model::validateRequired('upperColorScore', $this->upperColorScore, true);
        Model::validateRequired('upperType', $this->upperType, true);
        Model::validateRequired('upperTypeScore', $this->upperTypeScore, true);
        Model::validateRequired('lowerColor', $this->lowerColor, true);
        Model::validateRequired('lowerColorScore', $this->lowerColorScore, true);
        Model::validateRequired('lowerType', $this->lowerType, true);
        Model::validateRequired('lowerTypeScore', $this->lowerTypeScore, true);
        Model::validateRequired('gender', $this->gender, true);
        Model::validateRequired('genderScore', $this->genderScore, true);
        Model::validateRequired('hair', $this->hair, true);
        Model::validateRequired('hairScore', $this->hairScore, true);
        Model::validateRequired('age', $this->age, true);
        Model::validateRequired('ageScore', $this->ageScore, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objType) {
            $res['ObjType'] = $this->objType;
        }
        if (null !== $this->objTypeScore) {
            $res['ObjTypeScore'] = $this->objTypeScore;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }
        if (null !== $this->upperColor) {
            $res['UpperColor'] = $this->upperColor;
        }
        if (null !== $this->upperColorScore) {
            $res['UpperColorScore'] = $this->upperColorScore;
        }
        if (null !== $this->upperType) {
            $res['UpperType'] = $this->upperType;
        }
        if (null !== $this->upperTypeScore) {
            $res['UpperTypeScore'] = $this->upperTypeScore;
        }
        if (null !== $this->lowerColor) {
            $res['LowerColor'] = $this->lowerColor;
        }
        if (null !== $this->lowerColorScore) {
            $res['LowerColorScore'] = $this->lowerColorScore;
        }
        if (null !== $this->lowerType) {
            $res['LowerType'] = $this->lowerType;
        }
        if (null !== $this->lowerTypeScore) {
            $res['LowerTypeScore'] = $this->lowerTypeScore;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->genderScore) {
            $res['GenderScore'] = $this->genderScore;
        }
        if (null !== $this->hair) {
            $res['Hair'] = $this->hair;
        }
        if (null !== $this->hairScore) {
            $res['HairScore'] = $this->hairScore;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->ageScore) {
            $res['AgeScore'] = $this->ageScore;
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
        if (isset($map['ObjType'])) {
            $model->objType = $map['ObjType'];
        }
        if (isset($map['ObjTypeScore'])) {
            $model->objTypeScore = $map['ObjTypeScore'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }
        if (isset($map['UpperColor'])) {
            $model->upperColor = $map['UpperColor'];
        }
        if (isset($map['UpperColorScore'])) {
            $model->upperColorScore = $map['UpperColorScore'];
        }
        if (isset($map['UpperType'])) {
            $model->upperType = $map['UpperType'];
        }
        if (isset($map['UpperTypeScore'])) {
            $model->upperTypeScore = $map['UpperTypeScore'];
        }
        if (isset($map['LowerColor'])) {
            $model->lowerColor = $map['LowerColor'];
        }
        if (isset($map['LowerColorScore'])) {
            $model->lowerColorScore = $map['LowerColorScore'];
        }
        if (isset($map['LowerType'])) {
            $model->lowerType = $map['LowerType'];
        }
        if (isset($map['LowerTypeScore'])) {
            $model->lowerTypeScore = $map['LowerTypeScore'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['GenderScore'])) {
            $model->genderScore = $map['GenderScore'];
        }
        if (isset($map['Hair'])) {
            $model->hair = $map['Hair'];
        }
        if (isset($map['HairScore'])) {
            $model->hairScore = $map['HairScore'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['AgeScore'])) {
            $model->ageScore = $map['AgeScore'];
        }

        return $model;
    }
}
