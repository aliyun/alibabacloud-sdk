// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListStackGroupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("StackGroups")]
        [Validation(Required=true)]
        public List<ListStackGroupsResponseStackGroups> StackGroups { get; set; }
        public class ListStackGroupsResponseStackGroups : TeaModel {
            [NameInMap("StackGroupName")]
            [Validation(Required=true)]
            public string StackGroupName { get; set; }

            [NameInMap("StackGroupId")]
            [Validation(Required=true)]
            public string StackGroupId { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

            [NameInMap("DriftDetectionTime")]
            [Validation(Required=true)]
            public string DriftDetectionTime { get; set; }

            [NameInMap("StackGroupDriftStatus")]
            [Validation(Required=true)]
            public string StackGroupDriftStatus { get; set; }

        }

    }

}
