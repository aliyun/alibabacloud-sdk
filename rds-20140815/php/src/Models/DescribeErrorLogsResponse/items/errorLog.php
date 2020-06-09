<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponse\items;

use AlibabaCloud\Tea\Model;

class errorLog extends Model {
    protected $_name = [
        'errorInfo' => 'ErrorInfo',
        'createTime' => 'CreateTime',
    ];
    public function validate() {
        Model::validateRequired('errorInfo', $this->errorInfo, true);
        Model::validateRequired('createTime', $this->createTime, true);
    }
    public function toMap() {
        $res = [];
        $res['ErrorInfo'] = $this->errorInfo;
        $res['CreateTime'] = $this->createTime;
        return $res;
    }
    /**
     * @param array $map
     * @return errorLog
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ErrorInfo'])){
            $model->errorInfo = $map['ErrorInfo'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        return $model;
    }
    /**
     * @description errorInfo
     * @var string
     */
    public $errorInfo;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

}
