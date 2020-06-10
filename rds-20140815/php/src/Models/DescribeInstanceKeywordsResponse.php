<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponse\words;
use AlibabaCloud\Tea\Model;

class DescribeInstanceKeywordsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.key
     *
     * @var string
     */
    public $key;

    /**
     * @description data.words
     *
     * @var words
     */
    public $words;
    protected $_name = [
        'requestId' => 'RequestId',
        'key'       => 'Key',
        'words'     => 'Words',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('words', $this->words, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->words) {
            $res['Words'] = null !== $this->words ? $this->words->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceKeywordsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Words'])) {
            $model->words = words::fromMap($map['Words']);
        }

        return $model;
    }
}
