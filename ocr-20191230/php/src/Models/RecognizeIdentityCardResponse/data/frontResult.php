<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse\data\frontResult\cardAreas;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse\data\frontResult\faceRectangle;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse\data\frontResult\faceRectVertices;
use AlibabaCloud\Tea\Model;

class frontResult extends Model
{
    /**
     * @description address
     *
     * @var string
     */
    public $address;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description nationality
     *
     * @var string
     */
    public $nationality;

    /**
     * @description idNumber
     *
     * @var string
     */
    public $IDNumber;

    /**
     * @description gender
     *
     * @var string
     */
    public $gender;

    /**
     * @description birthDate
     *
     * @var string
     */
    public $birthDate;

    /**
     * @description cardAreas
     *
     * @var array
     */
    public $cardAreas;

    /**
     * @description faceRectVertices
     *
     * @var array
     */
    public $faceRectVertices;

    /**
     * @description faceRectangle
     *
     * @var faceRectangle
     */
    public $faceRectangle;
    protected $_name = [
        'address'          => 'Address',
        'name'             => 'Name',
        'nationality'      => 'Nationality',
        'IDNumber'         => 'IDNumber',
        'gender'           => 'Gender',
        'birthDate'        => 'BirthDate',
        'cardAreas'        => 'CardAreas',
        'faceRectVertices' => 'FaceRectVertices',
        'faceRectangle'    => 'FaceRectangle',
    ];

    public function validate()
    {
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('nationality', $this->nationality, true);
        Model::validateRequired('IDNumber', $this->IDNumber, true);
        Model::validateRequired('gender', $this->gender, true);
        Model::validateRequired('birthDate', $this->birthDate, true);
        Model::validateRequired('cardAreas', $this->cardAreas, true);
        Model::validateRequired('faceRectVertices', $this->faceRectVertices, true);
        Model::validateRequired('faceRectangle', $this->faceRectangle, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['Address']     = $this->address;
        $res['Name']        = $this->name;
        $res['Nationality'] = $this->nationality;
        $res['IDNumber']    = $this->IDNumber;
        $res['Gender']      = $this->gender;
        $res['BirthDate']   = $this->birthDate;
        $res['CardAreas']   = [];
        if (null !== $this->cardAreas && \is_array($this->cardAreas)) {
            $n = 0;
            foreach ($this->cardAreas as $item) {
                $res['CardAreas'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['FaceRectVertices'] = [];
        if (null !== $this->faceRectVertices && \is_array($this->faceRectVertices)) {
            $n = 0;
            foreach ($this->faceRectVertices as $item) {
                $res['FaceRectVertices'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['FaceRectangle'] = null !== $this->faceRectangle ? $this->faceRectangle->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frontResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['IDNumber'])) {
            $model->IDNumber = $map['IDNumber'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }
        if (isset($map['CardAreas'])) {
            if (!empty($map['CardAreas'])) {
                $model->cardAreas = [];
                $n                = 0;
                foreach ($map['CardAreas'] as $item) {
                    $model->cardAreas[$n++] = null !== $item ? cardAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaceRectVertices'])) {
            if (!empty($map['FaceRectVertices'])) {
                $model->faceRectVertices = [];
                $n                       = 0;
                foreach ($map['FaceRectVertices'] as $item) {
                    $model->faceRectVertices[$n++] = null !== $item ? faceRectVertices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaceRectangle'])) {
            $model->faceRectangle = faceRectangle::fromMap($map['FaceRectangle']);
        }

        return $model;
    }
}
