// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListStackGroupOperationsResponse : TeaModel {
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

        [NameInMap("StackGroupOperations")]
        [Validation(Required=true)]
        public List<ListStackGroupOperationsResponseStackGroupOperations> StackGroupOperations { get; set; }
        public class ListStackGroupOperationsResponseStackGroupOperations : TeaModel {
            [NameInMap("StackGroupName")]
            [Validation(Required=true)]
            public string StackGroupName { get; set; }

            [NameInMap("StackGroupId")]
            [Validation(Required=true)]
            public string StackGroupId { get; set; }

            [NameInMap("OperationId")]
            [Validation(Required=true)]
            public string OperationId { get; set; }

            [NameInMap("OperationDescription")]
            [Validation(Required=true)]
            public string OperationDescription { get; set; }

            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public string CreateTime { get; set; }

            [NameInMap("EndTime")]
            [Validation(Required=true)]
            public string EndTime { get; set; }

            [NameInMap("Action")]
            [Validation(Required=true)]
            public string Action { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

        }

    }

}
