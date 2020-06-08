<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponse\words;

class DescribeInstanceKeywordsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'key' => 'Key',
        'words' => 'Words',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('words', $this->words, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Key'] = $this->key;
        $res['Words'] = null !== $this->words ? $this->words->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeInstanceKeywordsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Key'])){
            $model->key = $map['Key'];
        }
        if(isset($map['Words'])){
            $model->words = words::fromMap($map['Words']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.key
     * @var string
     */
    public $key;

    /**
     * @description data.words
     * @var words
     */
    public $words;

}
