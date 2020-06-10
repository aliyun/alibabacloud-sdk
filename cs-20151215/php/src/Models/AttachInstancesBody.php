<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesBody\tags;
use AlibabaCloud\Tea\Model;

class AttachInstancesBody extends Model
{
    /**
     * @description format_disk
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description keep_instance_name
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description cpu_policy
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description key_pair
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description password
     *
     * @var string
     */
    public $password;

    /**
     * @description tags
     *
     * @var array
     */
    public $tags;

    /**
     * @description instances
     *
     * @var array
     */
    public $instances;
    protected $_name = [
        'formatDisk'       => 'format_disk',
        'keepInstanceName' => 'keep_instance_name',
        'cpuPolicy'        => 'cpu_policy',
        'keyPair'          => 'key_pair',
        'password'         => 'password',
        'tags'             => 'tags',
        'instances'        => 'instances',
    ];

    public function validate()
    {
        Model::validateRequired('keyPair', $this->keyPair, true);
        Model::validateRequired('password', $this->password, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }
        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instances) {
            $res['instances'] = [];
            if (null !== $this->instances) {
                $res['instances'] = $this->instances;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachInstancesBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }
        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $model->instances = $map['instances'];
            }
        }

        return $model;
    }
}
