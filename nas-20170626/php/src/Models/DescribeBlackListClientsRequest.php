<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeBlackListClientsRequest extends Model {
    protected $_name = [
        'regionId' => 'RegionId',
        'fileSystemId' => 'FileSystemId',
        'clientIP' => 'ClientIP',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionId'] = $this->regionId;
        $res['FileSystemId'] = $this->fileSystemId;
        $res['ClientIP'] = $this->clientIP;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeBlackListClientsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['ClientIP'])){
            $model->clientIP = $map['ClientIP'];
        }
        return $model;
    }
    /**
     * @description region
     * @var string
     */
    public $regionId;

    /**
     * @description fileSystemId
     * @var string
     */
    public $fileSystemId;

    /**
     * @description clientIp
     * @var string
     */
    public $clientIP;

}
