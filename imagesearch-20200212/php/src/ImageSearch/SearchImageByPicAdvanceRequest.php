<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class SearchImageByPicAdvanceRequest extends Model
{
    /**
     * @description PicContentObject
     *
     * @var Stream
     */
    public $picContentObject;

    /**
     * @description categoryId
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description crop
     *
     * @var bool
     */
    public $crop;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description num
     *
     * @var int
     */
    public $num;

    /**
     * @description start
     *
     * @var int
     */
    public $start;

    /**
     * @description filter
     *
     * @var string
     */
    public $filter;
    protected $_name = [
        'picContentObject' => 'PicContentObject',
        'categoryId'       => 'CategoryId',
        'instanceName'     => 'InstanceName',
        'crop'             => 'Crop',
        'region'           => 'Region',
        'num'              => 'Num',
        'start'            => 'Start',
        'filter'           => 'Filter',
    ];

    public function validate()
    {
        Model::validateRequired('picContentObject', $this->picContentObject, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['PicContentObject'] = $this->picContentObject;
        $res['CategoryId']       = $this->categoryId;
        $res['InstanceName']     = $this->instanceName;
        $res['Crop']             = $this->crop;
        $res['Region']           = $this->region;
        $res['Num']              = $this->num;
        $res['Start']            = $this->start;
        $res['Filter']           = $this->filter;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByPicAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicContentObject'])) {
            $model->picContentObject = $map['PicContentObject'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        return $model;
    }
}
