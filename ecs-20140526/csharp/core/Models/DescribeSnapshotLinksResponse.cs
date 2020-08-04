// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeSnapshotLinksResponse : TeaModel {
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

        [NameInMap("SnapshotLinks")]
        [Validation(Required=true)]
        public DescribeSnapshotLinksResponseSnapshotLinks SnapshotLinks { get; set; }
        public class DescribeSnapshotLinksResponseSnapshotLinks : TeaModel {
            [NameInMap("SnapshotLink")]
            [Validation(Required=true)]
            public List<DescribeSnapshotLinksResponseSnapshotLinksSnapshotLink> SnapshotLink { get; set; }
            public class DescribeSnapshotLinksResponseSnapshotLinksSnapshotLink : TeaModel {
                    public string SnapshotLinkId { get; set; }
                    public string RegionId { get; set; }
                    public string InstanceId { get; set; }
                    public string InstanceName { get; set; }
                    public string SourceDiskId { get; set; }
                    public string SourceDiskName { get; set; }
                    public int? SourceDiskSize { get; set; }
                    public string SourceDiskType { get; set; }
                    public string Category { get; set; }
                    public long TotalSize { get; set; }
                    public int? TotalCount { get; set; }
            }
        };

    }

}
