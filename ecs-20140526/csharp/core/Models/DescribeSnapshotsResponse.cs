// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeSnapshotsResponse : TeaModel {
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

        [NameInMap("Snapshots")]
        [Validation(Required=true)]
        public DescribeSnapshotsResponseSnapshots Snapshots { get; set; }
        public class DescribeSnapshotsResponseSnapshots : TeaModel {
            [NameInMap("Snapshot")]
            [Validation(Required=true)]
            public List<DescribeSnapshotsResponseSnapshotsSnapshot> Snapshot { get; set; }
            public class DescribeSnapshotsResponseSnapshotsSnapshot : TeaModel {
                    public string SnapshotId { get; set; }
                    public string SnapshotSN { get; set; }
                    public string SnapshotName { get; set; }
                    public string Progress { get; set; }
                    public string ProductCode { get; set; }
                    public string SourceDiskId { get; set; }
                    public string SourceDiskType { get; set; }
                    public int? RetentionDays { get; set; }
                    public bool? Encrypted { get; set; }
                    public string SourceDiskSize { get; set; }
                    public string Description { get; set; }
                    public string CreationTime { get; set; }
                    public string LastModifiedTime { get; set; }
                    public string Status { get; set; }
                    public string Usage { get; set; }
                    public string SourceStorageType { get; set; }
                    public int? RemainTime { get; set; }
                    public string ResourceGroupId { get; set; }
                    public string KMSKeyId { get; set; }
                    public string Category { get; set; }
                    public string SnapshotType { get; set; }
                    public DescribeSnapshotsResponseSnapshotsSnapshotTags Tags { get; set; }
                    public class DescribeSnapshotsResponseSnapshotsSnapshotTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeSnapshotsResponseSnapshotsSnapshotTagsTag> Tag { get; set; }
                        public class DescribeSnapshotsResponseSnapshotsSnapshotTagsTag : TeaModel {
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
