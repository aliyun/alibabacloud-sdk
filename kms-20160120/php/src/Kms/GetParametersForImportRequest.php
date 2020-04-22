<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class GetParametersForImportRequest extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description wrappingAlgorithm
     *
     * @var string
     */
    public $wrappingAlgorithm;

    /**
     * @description wrappingKeySpec
     *
     * @var string
     */
    public $wrappingKeySpec;
    protected $_name = [
        'keyId'             => 'KeyId',
        'wrappingAlgorithm' => 'WrappingAlgorithm',
        'wrappingKeySpec'   => 'WrappingKeySpec',
    ];

    public function validate()
    {
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('wrappingAlgorithm', $this->wrappingAlgorithm, true);
        Model::validateRequired('wrappingKeySpec', $this->wrappingKeySpec, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['KeyId']             = $this->keyId;
        $res['WrappingAlgorithm'] = $this->wrappingAlgorithm;
        $res['WrappingKeySpec']   = $this->wrappingKeySpec;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParametersForImportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['WrappingAlgorithm'])) {
            $model->wrappingAlgorithm = $map['WrappingAlgorithm'];
        }
        if (isset($map['WrappingKeySpec'])) {
            $model->wrappingKeySpec = $map['WrappingKeySpec'];
        }

        return $model;
    }
}
