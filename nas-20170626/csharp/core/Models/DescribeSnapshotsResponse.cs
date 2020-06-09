// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeSnapshotsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("Snapshots")]
        [Validation(Required=true)]
        public DescribeSnapshotsResponseSnapshots Snapshots { get; set; }
        public class DescribeSnapshotsResponseSnapshots : TeaModel {
            [NameInMap("Snapshot")]
            [Validation(Required=true)]
            public List<DescribeSnapshotsResponseSnapshotsSnapshot> Snapshot { get; set; }
            public class DescribeSnapshotsResponseSnapshotsSnapshot : TeaModel {
                    public string CreateTime { get; set; }
                    public string Description { get; set; }
                    public string Progress { get; set; }
                    public int? RemainTime { get; set; }
                    public int? RetentionDays { get; set; }
                    public string SnapshotId { get; set; }
                    public string SnapshotName { get; set; }
                    public string SourceFileSystemId { get; set; }
                    public long SourceFileSystemSize { get; set; }
                    public string Status { get; set; }
                    public int? EncryptType { get; set; }
                    public string SourceFileSystemVersion { get; set; }
            }
        };

    }

}
