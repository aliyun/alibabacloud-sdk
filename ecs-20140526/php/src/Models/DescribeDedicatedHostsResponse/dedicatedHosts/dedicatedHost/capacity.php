<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class capacity extends Model
{
    /**
     * @var int
     */
    public $totalVcpus;

    /**
     * @var int
     */
    public $availableVcpus;

    /**
     * @var int
     */
    public $totalVgpus;

    /**
     * @var int
     */
    public $availableVgpus;

    /**
     * @var float
     */
    public $totalMemory;

    /**
     * @var float
     */
    public $availableMemory;

    /**
     * @var int
     */
    public $totalLocalStorage;

    /**
     * @var int
     */
    public $availableLocalStorage;

    /**
     * @var string
     */
    public $localStorageCategory;
    protected $_name = [
        'totalVcpus'            => 'TotalVcpus',
        'availableVcpus'        => 'AvailableVcpus',
        'totalVgpus'            => 'TotalVgpus',
        'availableVgpus'        => 'AvailableVgpus',
        'totalMemory'           => 'TotalMemory',
        'availableMemory'       => 'AvailableMemory',
        'totalLocalStorage'     => 'TotalLocalStorage',
        'availableLocalStorage' => 'AvailableLocalStorage',
        'localStorageCategory'  => 'LocalStorageCategory',
    ];

    public function validate()
    {
        Model::validateRequired('totalVcpus', $this->totalVcpus, true);
        Model::validateRequired('availableVcpus', $this->availableVcpus, true);
        Model::validateRequired('totalVgpus', $this->totalVgpus, true);
        Model::validateRequired('availableVgpus', $this->availableVgpus, true);
        Model::validateRequired('totalMemory', $this->totalMemory, true);
        Model::validateRequired('availableMemory', $this->availableMemory, true);
        Model::validateRequired('totalLocalStorage', $this->totalLocalStorage, true);
        Model::validateRequired('availableLocalStorage', $this->availableLocalStorage, true);
        Model::validateRequired('localStorageCategory', $this->localStorageCategory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }
        if (null !== $this->availableVcpus) {
            $res['AvailableVcpus'] = $this->availableVcpus;
        }
        if (null !== $this->totalVgpus) {
            $res['TotalVgpus'] = $this->totalVgpus;
        }
        if (null !== $this->availableVgpus) {
            $res['AvailableVgpus'] = $this->availableVgpus;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->availableMemory) {
            $res['AvailableMemory'] = $this->availableMemory;
        }
        if (null !== $this->totalLocalStorage) {
            $res['TotalLocalStorage'] = $this->totalLocalStorage;
        }
        if (null !== $this->availableLocalStorage) {
            $res['AvailableLocalStorage'] = $this->availableLocalStorage;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalVcpus'])) {
            $model->totalVcpus = $map['TotalVcpus'];
        }
        if (isset($map['AvailableVcpus'])) {
            $model->availableVcpus = $map['AvailableVcpus'];
        }
        if (isset($map['TotalVgpus'])) {
            $model->totalVgpus = $map['TotalVgpus'];
        }
        if (isset($map['AvailableVgpus'])) {
            $model->availableVgpus = $map['AvailableVgpus'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['AvailableMemory'])) {
            $model->availableMemory = $map['AvailableMemory'];
        }
        if (isset($map['TotalLocalStorage'])) {
            $model->totalLocalStorage = $map['TotalLocalStorage'];
        }
        if (isset($map['AvailableLocalStorage'])) {
            $model->availableLocalStorage = $map['AvailableLocalStorage'];
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }

        return $model;
    }
}
