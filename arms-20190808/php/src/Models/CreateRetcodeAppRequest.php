<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateRetcodeAppRequest extends Model
{
    /**
     * @description siteName
     *
     * @var string
     */
    public $retcodeAppName;

    /**
     * @description siteType
     *
     * @var string
     */
    public $retcodeAppType;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'retcodeAppName' => 'RetcodeAppName',
        'retcodeAppType' => 'RetcodeAppType',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('retcodeAppName', $this->retcodeAppName, true);
        Model::validateRequired('retcodeAppType', $this->retcodeAppType, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->retcodeAppName) {
            $res['RetcodeAppName'] = $this->retcodeAppName;
        }
        if (null !== $this->retcodeAppType) {
            $res['RetcodeAppType'] = $this->retcodeAppType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRetcodeAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RetcodeAppName'])) {
            $model->retcodeAppName = $map['RetcodeAppName'];
        }
        if (isset($map['RetcodeAppType'])) {
            $model->retcodeAppType = $map['RetcodeAppType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
