<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponse\retcodeAppDataBean;
use AlibabaCloud\Tea\Model;

class CreateRetcodeAppResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var retcodeAppDataBean
     */
    public $retcodeAppDataBean;
    protected $_name = [
        'requestId'          => 'RequestId',
        'retcodeAppDataBean' => 'RetcodeAppDataBean',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('retcodeAppDataBean', $this->retcodeAppDataBean, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retcodeAppDataBean) {
            $res['RetcodeAppDataBean'] = null !== $this->retcodeAppDataBean ? $this->retcodeAppDataBean->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRetcodeAppResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetcodeAppDataBean'])) {
            $model->retcodeAppDataBean = retcodeAppDataBean::fromMap($map['RetcodeAppDataBean']);
        }

        return $model;
    }
}
