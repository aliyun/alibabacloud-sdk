<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosticReportListRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'DBInstanceId' => 'DBInstanceId',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDiagnosticReportListRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

}
