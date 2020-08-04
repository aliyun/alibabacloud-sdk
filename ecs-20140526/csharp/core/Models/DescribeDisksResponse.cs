// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDisksResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Disks")]
        [Validation(Required=true)]
        public DescribeDisksResponseDisks Disks { get; set; }
        public class DescribeDisksResponseDisks : TeaModel {
            [NameInMap("Disk")]
            [Validation(Required=true)]
            public List<DescribeDisksResponseDisksDisk> Disk { get; set; }
            public class DescribeDisksResponseDisksDisk : TeaModel {
                    public string DiskId { get; set; }
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
                    public string DiskName { get; set; }
                    public string Description { get; set; }
                    public string Type { get; set; }
                    public string Category { get; set; }
                    public int? Size { get; set; }
                    public string ImageId { get; set; }
                    public string SourceSnapshotId { get; set; }
                    public string AutoSnapshotPolicyId { get; set; }
                    public string ProductCode { get; set; }
                    public bool? Portable { get; set; }
                    public string Status { get; set; }
                    public string InstanceId { get; set; }
                    public string Device { get; set; }
                    public bool? DeleteWithInstance { get; set; }
                    public bool? DeleteAutoSnapshot { get; set; }
                    public bool? EnableAutoSnapshot { get; set; }
                    public bool? EnableAutomatedSnapshotPolicy { get; set; }
                    public string CreationTime { get; set; }
                    public string AttachedTime { get; set; }
                    public string DetachedTime { get; set; }
                    public string DiskChargeType { get; set; }
                    public string ExpiredTime { get; set; }
                    public string ResourceGroupId { get; set; }
                    public bool? Encrypted { get; set; }
                    public string StorageSetId { get; set; }
                    public int? StorageSetPartitionNumber { get; set; }
                    public int? MountInstanceNum { get; set; }
                    public int? IOPS { get; set; }
                    public int? IOPSRead { get; set; }
                    public int? IOPSWrite { get; set; }
                    public string KMSKeyId { get; set; }
                    public string PerformanceLevel { get; set; }
                    public string BdfId { get; set; }
                    public string SerialNumber { get; set; }
                    public DescribeDisksResponseDisksDiskOperationLocks OperationLocks { get; set; }
                    public class DescribeDisksResponseDisksDiskOperationLocks : TeaModel {
                        [NameInMap("OperationLock")]
                        [Validation(Required=true)]
                        public List<DescribeDisksResponseDisksDiskOperationLocksOperationLock> OperationLock { get; set; }
                        public class DescribeDisksResponseDisksDiskOperationLocksOperationLock : TeaModel {
                            [NameInMap("LockReason")]
                            [Validation(Required=true)]
                            public string LockReason { get; set; }

                        }

                    }
                    public DescribeDisksResponseDisksDiskMountInstances MountInstances { get; set; }
                    public class DescribeDisksResponseDisksDiskMountInstances : TeaModel {
                        [NameInMap("MountInstance")]
                        [Validation(Required=true)]
                        public List<DescribeDisksResponseDisksDiskMountInstancesMountInstance> MountInstance { get; set; }
                        public class DescribeDisksResponseDisksDiskMountInstancesMountInstance : TeaModel {
                            [NameInMap("InstanceId")]
                            [Validation(Required=true)]
                            public string InstanceId { get; set; }

                            [NameInMap("Device")]
                            [Validation(Required=true)]
                            public string Device { get; set; }

                            [NameInMap("AttachedTime")]
                            [Validation(Required=true)]
                            public string AttachedTime { get; set; }

                        }

                    }
                    public DescribeDisksResponseDisksDiskTags Tags { get; set; }
                    public class DescribeDisksResponseDisksDiskTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeDisksResponseDisksDiskTagsTag> Tag { get; set; }
                        public class DescribeDisksResponseDisksDiskTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
            }
        };

    }

}
