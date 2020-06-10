<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class GetGroupMiscAggTimeSerRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $appCode;

    /**
     * @description start
     *
     * @var int
     */
    public $start;

    /**
     * @description end
     *
     * @var int
     */
    public $end;

    /**
     * @description apgroupUuid
     *
     * @var string
     */
    public $apgroupUuid;
    protected $_name = [
        'appName'     => 'AppName',
        'appCode'     => 'AppCode',
        'start'       => 'Start',
        'end'         => 'End',
        'apgroupUuid' => 'ApgroupUuid',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('start', $this->start, true);
        Model::validateRequired('end', $this->end, true);
        Model::validateRequired('apgroupUuid', $this->apgroupUuid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->apgroupUuid) {
            $res['ApgroupUuid'] = $this->apgroupUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGroupMiscAggTimeSerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['ApgroupUuid'])) {
            $model->apgroupUuid = $map['ApgroupUuid'];
        }

        return $model;
    }
}
