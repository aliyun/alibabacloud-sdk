// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeAutoSnapshotTasksResponse : TeaModel {
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

        [NameInMap("AutoSnapshotTasks")]
        [Validation(Required=true)]
        public DescribeAutoSnapshotTasksResponseAutoSnapshotTasks AutoSnapshotTasks { get; set; }
        public class DescribeAutoSnapshotTasksResponseAutoSnapshotTasks : TeaModel {
            [NameInMap("AutoSnapshotTask")]
            [Validation(Required=true)]
            public List<DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask> AutoSnapshotTask { get; set; }
            public class DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask : TeaModel {
                    public string SourceFileSystemId { get; set; }
                    public string AutoSnapshotPolicyId { get; set; }
            }
        };

    }

}
