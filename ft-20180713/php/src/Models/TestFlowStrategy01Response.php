<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestFlowStrategy01Response extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description List
     *
     * @var array
     */
    public $list;

    /**
     * @description Names
     *
     * @var array
     */
    public $names;
    protected $_name = [
        'requestId' => 'RequestId',
        'list'      => 'List',
        'names'     => 'Names',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('list', $this->list, true);
        Model::validateRequired('names', $this->names, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list) {
                $res['List'] = $this->list;
            }
        }
        if (null !== $this->names) {
            $res['Names'] = [];
            if (null !== $this->names) {
                $res['Names'] = $this->names;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestFlowStrategy01Response
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $model->list = $map['List'];
            }
        }
        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = [];
                $model->names = $map['Names'];
            }
        }

        return $model;
    }
}
