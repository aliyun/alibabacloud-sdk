<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponse\keyPairs;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponse\keyPairs\keyPair\tags;
use AlibabaCloud\Tea\Model;

class keyPair extends Model
{
    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $keyPairFingerPrint;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'keyPairName'        => 'KeyPairName',
        'keyPairFingerPrint' => 'KeyPairFingerPrint',
        'creationTime'       => 'CreationTime',
        'resourceGroupId'    => 'ResourceGroupId',
        'tags'               => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('keyPairName', $this->keyPairName, true);
        Model::validateRequired('keyPairFingerPrint', $this->keyPairFingerPrint, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->keyPairFingerPrint) {
            $res['KeyPairFingerPrint'] = $this->keyPairFingerPrint;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyPair
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['KeyPairFingerPrint'])) {
            $model->keyPairFingerPrint = $map['KeyPairFingerPrint'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
