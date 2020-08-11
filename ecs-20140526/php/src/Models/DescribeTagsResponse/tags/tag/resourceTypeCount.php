<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponse\tags\tag;

use AlibabaCloud\Tea\Model;

class resourceTypeCount extends Model
{
    /**
     * @var int
     */
    public $instance;

    /**
     * @var int
     */
    public $disk;

    /**
     * @var int
     */
    public $volume;

    /**
     * @var int
     */
    public $image;

    /**
     * @var int
     */
    public $snapshot;

    /**
     * @var int
     */
    public $securitygroup;

    /**
     * @var int
     */
    public $launchTemplate;

    /**
     * @var int
     */
    public $eni;

    /**
     * @var int
     */
    public $ddh;

    /**
     * @var int
     */
    public $keyPair;

    /**
     * @var int
     */
    public $snapshotPolicy;
    protected $_name = [
        'instance'       => 'Instance',
        'disk'           => 'Disk',
        'volume'         => 'Volume',
        'image'          => 'Image',
        'snapshot'       => 'Snapshot',
        'securitygroup'  => 'Securitygroup',
        'launchTemplate' => 'LaunchTemplate',
        'eni'            => 'Eni',
        'ddh'            => 'Ddh',
        'keyPair'        => 'KeyPair',
        'snapshotPolicy' => 'SnapshotPolicy',
    ];

    public function validate()
    {
        Model::validateRequired('instance', $this->instance, true);
        Model::validateRequired('disk', $this->disk, true);
        Model::validateRequired('volume', $this->volume, true);
        Model::validateRequired('image', $this->image, true);
        Model::validateRequired('snapshot', $this->snapshot, true);
        Model::validateRequired('securitygroup', $this->securitygroup, true);
        Model::validateRequired('launchTemplate', $this->launchTemplate, true);
        Model::validateRequired('eni', $this->eni, true);
        Model::validateRequired('ddh', $this->ddh, true);
        Model::validateRequired('keyPair', $this->keyPair, true);
        Model::validateRequired('snapshotPolicy', $this->snapshotPolicy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->snapshot) {
            $res['Snapshot'] = $this->snapshot;
        }
        if (null !== $this->securitygroup) {
            $res['Securitygroup'] = $this->securitygroup;
        }
        if (null !== $this->launchTemplate) {
            $res['LaunchTemplate'] = $this->launchTemplate;
        }
        if (null !== $this->eni) {
            $res['Eni'] = $this->eni;
        }
        if (null !== $this->ddh) {
            $res['Ddh'] = $this->ddh;
        }
        if (null !== $this->keyPair) {
            $res['KeyPair'] = $this->keyPair;
        }
        if (null !== $this->snapshotPolicy) {
            $res['SnapshotPolicy'] = $this->snapshotPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceTypeCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Snapshot'])) {
            $model->snapshot = $map['Snapshot'];
        }
        if (isset($map['Securitygroup'])) {
            $model->securitygroup = $map['Securitygroup'];
        }
        if (isset($map['LaunchTemplate'])) {
            $model->launchTemplate = $map['LaunchTemplate'];
        }
        if (isset($map['Eni'])) {
            $model->eni = $map['Eni'];
        }
        if (isset($map['Ddh'])) {
            $model->ddh = $map['Ddh'];
        }
        if (isset($map['KeyPair'])) {
            $model->keyPair = $map['KeyPair'];
        }
        if (isset($map['SnapshotPolicy'])) {
            $model->snapshotPolicy = $map['SnapshotPolicy'];
        }

        return $model;
    }
}
