<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeStoragePackagesRequest extends Model {
    protected $_name = [
        'regionId' => 'RegionId',
        'pageSize' => 'PageSize',
        'useUTCDateTime' => 'UseUTCDateTime',
        'pageNumber' => 'PageNumber',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionId'] = $this->regionId;
        $res['PageSize'] = $this->pageSize;
        $res['UseUTCDateTime'] = $this->useUTCDateTime;
        $res['PageNumber'] = $this->pageNumber;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeStoragePackagesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['UseUTCDateTime'])){
            $model->useUTCDateTime = $map['UseUTCDateTime'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        return $model;
    }
    /**
     * @description region
     * @var string
     */
    public $regionId;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description useUTCDateTime
     * @var bool
     */
    public $useUTCDateTime;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

}
