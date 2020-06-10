<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeStoragePackagesRequest extends Model
{
    /**
     * @description region
     *
     * @var string
     */
    public $regionId;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description useUTCDateTime
     *
     * @var bool
     */
    public $useUTCDateTime;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'regionId'       => 'RegionId',
        'pageSize'       => 'PageSize',
        'useUTCDateTime' => 'UseUTCDateTime',
        'pageNumber'     => 'PageNumber',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->useUTCDateTime) {
            $res['UseUTCDateTime'] = $this->useUTCDateTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStoragePackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UseUTCDateTime'])) {
            $model->useUTCDateTime = $map['UseUTCDateTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
