<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class AddApListToApgroupRequest extends Model
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
     * @description apMacList
     *
     * @var array
     */
    public $apMacList;

    /**
     * @description apgroupId
     *
     * @var string
     */
    public $apGroupId;
    protected $_name = [
        'appName'   => 'AppName',
        'appCode'   => 'AppCode',
        'apMacList' => 'ApMacList',
        'apGroupId' => 'ApGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('apMacList', $this->apMacList, true);
        Model::validateRequired('apGroupId', $this->apGroupId, true);
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
        if (null !== $this->apMacList) {
            $res['ApMacList'] = $this->apMacList;
        }
        if (null !== $this->apGroupId) {
            $res['ApGroupId'] = $this->apGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddApListToApgroupRequest
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
        if (isset($map['ApMacList'])) {
            $model->apMacList = $map['ApMacList'];
        }
        if (isset($map['ApGroupId'])) {
            $model->apGroupId = $map['ApGroupId'];
        }

        return $model;
    }
}
