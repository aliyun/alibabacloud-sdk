<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponse\pageBean;
use AlibabaCloud\Tea\Model;

class SearchEventsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description isTrigger
     *
     * @var int
     */
    public $isTrigger;

    /**
     * @description data
     *
     * @var pageBean
     */
    public $pageBean;
    protected $_name = [
        'requestId' => 'RequestId',
        'isTrigger' => 'IsTrigger',
        'pageBean'  => 'PageBean',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isTrigger', $this->isTrigger, true);
        Model::validateRequired('pageBean', $this->pageBean, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isTrigger) {
            $res['IsTrigger'] = $this->isTrigger;
        }
        if (null !== $this->pageBean) {
            $res['PageBean'] = null !== $this->pageBean ? $this->pageBean->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEventsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsTrigger'])) {
            $model->isTrigger = $map['IsTrigger'];
        }
        if (isset($map['PageBean'])) {
            $model->pageBean = pageBean::fromMap($map['PageBean']);
        }

        return $model;
    }
}
