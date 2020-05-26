<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponse;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponse\data\invalidStampAreas;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponse\data\otherStampAreas;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponse\data\registerStampAreas;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponse\data\titleArea;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponse\data\undertakeStampAreas;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description angle
     *
     * @var float
     */
    public $angle;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description gender
     *
     * @var string
     */
    public $gender;

    /**
     * @description relation
     *
     * @var string
     */
    public $relation;

    /**
     * @description birthPlace
     *
     * @var string
     */
    public $birthPlace;

    /**
     * @description nationality
     *
     * @var string
     */
    public $nationality;

    /**
     * @description nativePlace
     *
     * @var string
     */
    public $nativePlace;

    /**
     * @description birthDate
     *
     * @var string
     */
    public $birthDate;

    /**
     * @description idNumber
     *
     * @var string
     */
    public $IDNumber;

    /**
     * @description invalidStampAreas
     *
     * @var array
     */
    public $invalidStampAreas;

    /**
     * @description undertakeStampAreas
     *
     * @var array
     */
    public $undertakeStampAreas;

    /**
     * @description registerStampAreas
     *
     * @var array
     */
    public $registerStampAreas;

    /**
     * @description otherStampAreas
     *
     * @var array
     */
    public $otherStampAreas;

    /**
     * @description titleArea
     *
     * @var titleArea
     */
    public $titleArea;
    protected $_name = [
        'angle'               => 'Angle',
        'name'                => 'Name',
        'gender'              => 'Gender',
        'relation'            => 'Relation',
        'birthPlace'          => 'BirthPlace',
        'nationality'         => 'Nationality',
        'nativePlace'         => 'NativePlace',
        'birthDate'           => 'BirthDate',
        'IDNumber'            => 'IDNumber',
        'invalidStampAreas'   => 'InvalidStampAreas',
        'undertakeStampAreas' => 'UndertakeStampAreas',
        'registerStampAreas'  => 'RegisterStampAreas',
        'otherStampAreas'     => 'OtherStampAreas',
        'titleArea'           => 'TitleArea',
    ];

    public function validate()
    {
        Model::validateRequired('angle', $this->angle, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('gender', $this->gender, true);
        Model::validateRequired('relation', $this->relation, true);
        Model::validateRequired('birthPlace', $this->birthPlace, true);
        Model::validateRequired('nationality', $this->nationality, true);
        Model::validateRequired('nativePlace', $this->nativePlace, true);
        Model::validateRequired('birthDate', $this->birthDate, true);
        Model::validateRequired('IDNumber', $this->IDNumber, true);
        Model::validateRequired('invalidStampAreas', $this->invalidStampAreas, true);
        Model::validateRequired('undertakeStampAreas', $this->undertakeStampAreas, true);
        Model::validateRequired('registerStampAreas', $this->registerStampAreas, true);
        Model::validateRequired('otherStampAreas', $this->otherStampAreas, true);
        Model::validateRequired('titleArea', $this->titleArea, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['Angle']             = $this->angle;
        $res['Name']              = $this->name;
        $res['Gender']            = $this->gender;
        $res['Relation']          = $this->relation;
        $res['BirthPlace']        = $this->birthPlace;
        $res['Nationality']       = $this->nationality;
        $res['NativePlace']       = $this->nativePlace;
        $res['BirthDate']         = $this->birthDate;
        $res['IDNumber']          = $this->IDNumber;
        $res['InvalidStampAreas'] = [];
        if (null !== $this->invalidStampAreas && \is_array($this->invalidStampAreas)) {
            $n = 0;
            foreach ($this->invalidStampAreas as $item) {
                $res['InvalidStampAreas'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['UndertakeStampAreas'] = [];
        if (null !== $this->undertakeStampAreas && \is_array($this->undertakeStampAreas)) {
            $n = 0;
            foreach ($this->undertakeStampAreas as $item) {
                $res['UndertakeStampAreas'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['RegisterStampAreas'] = [];
        if (null !== $this->registerStampAreas && \is_array($this->registerStampAreas)) {
            $n = 0;
            foreach ($this->registerStampAreas as $item) {
                $res['RegisterStampAreas'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['OtherStampAreas'] = [];
        if (null !== $this->otherStampAreas && \is_array($this->otherStampAreas)) {
            $n = 0;
            foreach ($this->otherStampAreas as $item) {
                $res['OtherStampAreas'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['TitleArea'] = null !== $this->titleArea ? $this->titleArea->toMap() : null;

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
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }
        if (isset($map['BirthPlace'])) {
            $model->birthPlace = $map['BirthPlace'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['NativePlace'])) {
            $model->nativePlace = $map['NativePlace'];
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }
        if (isset($map['IDNumber'])) {
            $model->IDNumber = $map['IDNumber'];
        }
        if (isset($map['InvalidStampAreas'])) {
            if (!empty($map['InvalidStampAreas'])) {
                $model->invalidStampAreas = [];
                $n                        = 0;
                foreach ($map['InvalidStampAreas'] as $item) {
                    $model->invalidStampAreas[$n++] = null !== $item ? invalidStampAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UndertakeStampAreas'])) {
            if (!empty($map['UndertakeStampAreas'])) {
                $model->undertakeStampAreas = [];
                $n                          = 0;
                foreach ($map['UndertakeStampAreas'] as $item) {
                    $model->undertakeStampAreas[$n++] = null !== $item ? undertakeStampAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegisterStampAreas'])) {
            if (!empty($map['RegisterStampAreas'])) {
                $model->registerStampAreas = [];
                $n                         = 0;
                foreach ($map['RegisterStampAreas'] as $item) {
                    $model->registerStampAreas[$n++] = null !== $item ? registerStampAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OtherStampAreas'])) {
            if (!empty($map['OtherStampAreas'])) {
                $model->otherStampAreas = [];
                $n                      = 0;
                foreach ($map['OtherStampAreas'] as $item) {
                    $model->otherStampAreas[$n++] = null !== $item ? otherStampAreas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TitleArea'])) {
            $model->titleArea = titleArea::fromMap($map['TitleArea']);
        }

        return $model;
    }
}
