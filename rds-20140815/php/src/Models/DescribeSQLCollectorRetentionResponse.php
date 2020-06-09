<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLCollectorRetentionResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'configValue' => 'ConfigValue',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('configValue', $this->configValue, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ConfigValue'] = $this->configValue;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeSQLCollectorRetentionResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ConfigValue'])){
            $model->configValue = $map['ConfigValue'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.configValue
     * @var string
     */
    public $configValue;

}
