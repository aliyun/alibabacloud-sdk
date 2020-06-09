<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceTDEResponse\databases;

class DescribeDBInstanceTDEResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'TDEStatus' => 'TDEStatus',
        'databases' => 'Databases',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('TDEStatus', $this->TDEStatus, true);
        Model::validateRequired('databases', $this->databases, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TDEStatus'] = $this->TDEStatus;
        $res['Databases'] = null !== $this->databases ? $this->databases->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBInstanceTDEResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TDEStatus'])){
            $model->TDEStatus = $map['TDEStatus'];
        }
        if(isset($map['Databases'])){
            $model->databases = databases::fromMap($map['Databases']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.tdeStatus
     * @var string
     */
    public $TDEStatus;

    /**
     * @description data.databases
     * @var databases
     */
    public $databases;

}
