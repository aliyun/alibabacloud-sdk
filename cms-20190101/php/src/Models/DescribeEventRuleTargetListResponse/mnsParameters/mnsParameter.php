<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\mnsParameters;

use AlibabaCloud\Tea\Model;

class mnsParameter extends Model
{
    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description queue
     *
     * @var string
     */
    public $queue;

    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description arn
     *
     * @var string
     */
    public $arn;
    protected $_name = [
        'region' => 'Region',
        'queue'  => 'Queue',
        'id'     => 'Id',
        'arn'    => 'Arn',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('queue', $this->queue, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('arn', $this->arn, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mnsParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        return $model;
    }
}
