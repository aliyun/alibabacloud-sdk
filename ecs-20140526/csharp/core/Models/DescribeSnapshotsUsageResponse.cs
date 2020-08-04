// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeSnapshotsUsageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SnapshotCount")]
        [Validation(Required=true)]
        public int? SnapshotCount { get; set; }

        [NameInMap("SnapshotSize")]
        [Validation(Required=true)]
        public long SnapshotSize { get; set; }

    }

}
