// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListStackEventsResponse : TeaModel {
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

        [NameInMap("Events")]
        [Validation(Required=true)]
        public List<ListStackEventsResponseEvents> Events { get; set; }
        public class ListStackEventsResponseEvents : TeaModel {
            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public string CreateTime { get; set; }

            [NameInMap("EventId")]
            [Validation(Required=true)]
            public string EventId { get; set; }

            [NameInMap("LogicalResourceId")]
            [Validation(Required=true)]
            public string LogicalResourceId { get; set; }

            [NameInMap("PhysicalResourceId")]
            [Validation(Required=true)]
            public string PhysicalResourceId { get; set; }

            [NameInMap("ResourceType")]
            [Validation(Required=true)]
            public string ResourceType { get; set; }

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

        }

    }

}
