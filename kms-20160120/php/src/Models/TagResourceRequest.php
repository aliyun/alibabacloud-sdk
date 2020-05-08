<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class TagResourceRequest extends Model
{
    /**
     * @description keyId
     *
     * @var string
     */
    public $keyId;

    /**
     * @description tags
     *
     * @var string
     */
    public $tags;

    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'keyId'      => 'KeyId',
        'tags'       => 'Tags',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['KeyId']      = $this->keyId;
        $res['Tags']       = $this->tags;
        $res['SecretName'] = $this->secretName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
