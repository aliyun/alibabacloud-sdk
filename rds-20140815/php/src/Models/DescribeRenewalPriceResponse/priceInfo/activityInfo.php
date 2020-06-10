<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse\priceInfo;

use AlibabaCloud\Tea\Model;

class activityInfo extends Model
{
    /**
     * @description aliyunCpsResult.checkErrMsg
     *
     * @var string
     */
    public $checkErrMsg;

    /**
     * @description aliyunCpsResult.errorCode
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description aliyunCpsResult.success
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'checkErrMsg' => 'CheckErrMsg',
        'errorCode'   => 'ErrorCode',
        'success'     => 'Success',
    ];

    public function validate()
    {
        Model::validateRequired('checkErrMsg', $this->checkErrMsg, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('success', $this->success, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkErrMsg) {
            $res['CheckErrMsg'] = $this->checkErrMsg;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckErrMsg'])) {
            $model->checkErrMsg = $map['CheckErrMsg'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
