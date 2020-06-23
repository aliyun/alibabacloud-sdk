<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponse;

use AlibabaCloud\Tea\Model;

class dashboardVos extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description uid
     *
     * @var string
     */
    public $uid;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description time
     *
     * @var string
     */
    public $time;

    /**
     * @description url
     *
     * @var string
     */
    public $url;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description exporter
     *
     * @var string
     */
    public $exporter;

    /**
     * @description isArmsExporter
     *
     * @var bool
     */
    public $isArmsExporter;

    /**
     * @description tags
     *
     * @var array
     */
    public $tags;
    protected $_name = [
        'id'             => 'Id',
        'uid'            => 'Uid',
        'title'          => 'Title',
        'time'           => 'Time',
        'url'            => 'Url',
        'type'           => 'Type',
        'exporter'       => 'Exporter',
        'isArmsExporter' => 'IsArmsExporter',
        'tags'           => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('uid', $this->uid, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('exporter', $this->exporter, true);
        Model::validateRequired('isArmsExporter', $this->isArmsExporter, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->exporter) {
            $res['Exporter'] = $this->exporter;
        }
        if (null !== $this->isArmsExporter) {
            $res['IsArmsExporter'] = $this->isArmsExporter;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags) {
                $res['Tags'] = $this->tags;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dashboardVos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Exporter'])) {
            $model->exporter = $map['Exporter'];
        }
        if (isset($map['IsArmsExporter'])) {
            $model->isArmsExporter = $map['IsArmsExporter'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
