<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCharacterSetNameResponse\characterSetNameItems;
use AlibabaCloud\Tea\Model;

class DescribeCharacterSetNameResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description data.characterSetNameItems
     *
     * @var characterSetNameItems
     */
    public $characterSetNameItems;
    protected $_name = [
        'requestId'             => 'RequestId',
        'engine'                => 'Engine',
        'characterSetNameItems' => 'CharacterSetNameItems',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('characterSetNameItems', $this->characterSetNameItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->characterSetNameItems) {
            $res['CharacterSetNameItems'] = null !== $this->characterSetNameItems ? $this->characterSetNameItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCharacterSetNameResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['CharacterSetNameItems'])) {
            $model->characterSetNameItems = characterSetNameItems::fromMap($map['CharacterSetNameItems']);
        }

        return $model;
    }
}
