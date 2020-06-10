<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponse\data\attachAlertResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description attachAlertResult
     *
     * @var attachAlertResult
     */
    public $attachAlertResult;
    protected $_name = [
        'attachAlertResult' => 'AttachAlertResult',
    ];

    public function validate()
    {
        Model::validateRequired('attachAlertResult', $this->attachAlertResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachAlertResult) {
            $res['AttachAlertResult'] = null !== $this->attachAlertResult ? $this->attachAlertResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachAlertResult'])) {
            $model->attachAlertResult = attachAlertResult::fromMap($map['AttachAlertResult']);
        }

        return $model;
    }
}
