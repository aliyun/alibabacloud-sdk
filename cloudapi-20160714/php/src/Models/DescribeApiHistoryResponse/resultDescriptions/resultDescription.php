<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\resultDescriptions;

use AlibabaCloud\Tea\Model;

class resultDescription extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description pid
     *
     * @var string
     */
    public $pid;

    /**
     * @description hasChild
     *
     * @var bool
     */
    public $hasChild;

    /**
     * @description key
     *
     * @var string
     */
    public $key;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description mandatory
     *
     * @var bool
     */
    public $mandatory;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'id'          => 'Id',
        'pid'         => 'Pid',
        'hasChild'    => 'HasChild',
        'key'         => 'Key',
        'name'        => 'Name',
        'mandatory'   => 'Mandatory',
        'type'        => 'Type',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('pid', $this->pid, true);
        Model::validateRequired('hasChild', $this->hasChild, true);
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('mandatory', $this->mandatory, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->hasChild) {
            $res['HasChild'] = $this->hasChild;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->mandatory) {
            $res['Mandatory'] = $this->mandatory;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultDescription
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['HasChild'])) {
            $model->hasChild = $map['HasChild'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Mandatory'])) {
            $model->mandatory = $map['Mandatory'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
