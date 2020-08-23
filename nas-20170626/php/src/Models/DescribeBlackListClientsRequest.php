<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeBlackListClientsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $clientIP;
    protected $_name = [
        'regionId'     => 'RegionId',
        'fileSystemId' => 'FileSystemId',
        'clientIP'     => 'ClientIP',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBlackListClientsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }

        return $model;
    }
}
