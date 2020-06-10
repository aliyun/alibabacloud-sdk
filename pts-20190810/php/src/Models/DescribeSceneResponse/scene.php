<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\files;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\relations;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\status;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\testConfig;
use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\vips;
use AlibabaCloud\Tea\Model;

class scene extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description variables
     *
     * @var array
     */
    public $variables;

    /**
     * @description headers
     *
     * @var array
     */
    public $headers;

    /**
     * @description creator
     *
     * @var string
     */
    public $creator;

    /**
     * @description modifier
     *
     * @var string
     */
    public $modifier;

    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description modifyTime
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description relations
     *
     * @var array
     */
    public $relations;

    /**
     * @description vips
     *
     * @var array
     */
    public $vips;

    /**
     * @description files
     *
     * @var array
     */
    public $files;

    /**
     * @description status
     *
     * @var status
     */
    public $status;

    /**
     * @description testConfig
     *
     * @var testConfig
     */
    public $testConfig;
    protected $_name = [
        'id'         => 'Id',
        'name'       => 'Name',
        'type'       => 'Type',
        'variables'  => 'Variables',
        'headers'    => 'Headers',
        'creator'    => 'Creator',
        'modifier'   => 'Modifier',
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'relations'  => 'Relations',
        'vips'       => 'Vips',
        'files'      => 'Files',
        'status'     => 'Status',
        'testConfig' => 'TestConfig',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('variables', $this->variables, true);
        Model::validateRequired('headers', $this->headers, true);
        Model::validateRequired('creator', $this->creator, true);
        Model::validateRequired('modifier', $this->modifier, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('relations', $this->relations, true);
        Model::validateRequired('vips', $this->vips, true);
        Model::validateRequired('files', $this->files, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('testConfig', $this->testConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->relations) {
            $res['Relations'] = [];
            if (null !== $this->relations && \is_array($this->relations)) {
                $n = 0;
                foreach ($this->relations as $item) {
                    $res['Relations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vips) {
            $res['Vips'] = [];
            if (null !== $this->vips && \is_array($this->vips)) {
                $n = 0;
                foreach ($this->vips as $item) {
                    $res['Vips'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->files) {
            $res['Files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['Files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->testConfig) {
            $res['TestConfig'] = null !== $this->testConfig ? $this->testConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scene
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Relations'])) {
            if (!empty($map['Relations'])) {
                $model->relations = [];
                $n                = 0;
                foreach ($map['Relations'] as $item) {
                    $model->relations[$n++] = null !== $item ? relations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Vips'])) {
            if (!empty($map['Vips'])) {
                $model->vips = [];
                $n           = 0;
                foreach ($map['Vips'] as $item) {
                    $model->vips[$n++] = null !== $item ? vips::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['Files'] as $item) {
                    $model->files[$n++] = null !== $item ? files::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }
        if (isset($map['TestConfig'])) {
            $model->testConfig = testConfig::fromMap($map['TestConfig']);
        }

        return $model;
    }
}
