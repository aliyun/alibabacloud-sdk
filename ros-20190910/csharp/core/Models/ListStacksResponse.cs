// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListStacksResponse : TeaModel {
        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("Stacks")]
        [Validation(Required=true)]
        public List<ListStacksResponseStacks> Stacks { get; set; }
        public class ListStacksResponseStacks : TeaModel {
            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public string CreateTime { get; set; }

            [NameInMap("DisableRollback")]
            [Validation(Required=true)]
            public bool? DisableRollback { get; set; }

            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("StackId")]
            [Validation(Required=true)]
            public string StackId { get; set; }

            [NameInMap("StackName")]
            [Validation(Required=true)]
            public string StackName { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("StatusReason")]
            [Validation(Required=true)]
            public string StatusReason { get; set; }

            [NameInMap("TimeoutInMinutes")]
            [Validation(Required=true)]
            public int? TimeoutInMinutes { get; set; }

            [NameInMap("ParentStackId")]
            [Validation(Required=true)]
            public string ParentStackId { get; set; }

            [NameInMap("UpdateTime")]
            [Validation(Required=true)]
            public string UpdateTime { get; set; }

            [NameInMap("StackDriftStatus")]
            [Validation(Required=true)]
            public string StackDriftStatus { get; set; }

            [NameInMap("DriftDetectionTime")]
            [Validation(Required=true)]
            public string DriftDetectionTime { get; set; }

        }

    }

}
