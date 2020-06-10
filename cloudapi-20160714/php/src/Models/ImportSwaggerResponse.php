<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse\failed;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse\modelFailed;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse\modelSuccess;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse\success;
use AlibabaCloud\Tea\Model;

class ImportSwaggerResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.success
     *
     * @var success
     */
    public $success;

    /**
     * @description data.failed
     *
     * @var failed
     */
    public $failed;

    /**
     * @description data.modelFailed
     *
     * @var modelFailed
     */
    public $modelFailed;

    /**
     * @description data.modelSuccess
     *
     * @var modelSuccess
     */
    public $modelSuccess;
    protected $_name = [
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'failed'       => 'Failed',
        'modelFailed'  => 'ModelFailed',
        'modelSuccess' => 'ModelSuccess',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('failed', $this->failed, true);
        Model::validateRequired('modelFailed', $this->modelFailed, true);
        Model::validateRequired('modelSuccess', $this->modelSuccess, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = null !== $this->success ? $this->success->toMap() : null;
        }
        if (null !== $this->failed) {
            $res['Failed'] = null !== $this->failed ? $this->failed->toMap() : null;
        }
        if (null !== $this->modelFailed) {
            $res['ModelFailed'] = null !== $this->modelFailed ? $this->modelFailed->toMap() : null;
        }
        if (null !== $this->modelSuccess) {
            $res['ModelSuccess'] = null !== $this->modelSuccess ? $this->modelSuccess->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportSwaggerResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = success::fromMap($map['Success']);
        }
        if (isset($map['Failed'])) {
            $model->failed = failed::fromMap($map['Failed']);
        }
        if (isset($map['ModelFailed'])) {
            $model->modelFailed = modelFailed::fromMap($map['ModelFailed']);
        }
        if (isset($map['ModelSuccess'])) {
            $model->modelSuccess = modelSuccess::fromMap($map['ModelSuccess']);
        }

        return $model;
    }
}
