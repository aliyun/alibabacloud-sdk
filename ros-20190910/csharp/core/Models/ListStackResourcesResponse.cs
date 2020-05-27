// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListStackResourcesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Resources")]
        [Validation(Required=true)]
        public List<ListStackResourcesResponseResources> Resources { get; set; }
        public class ListStackResourcesResponseResources : TeaModel {
            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public string CreateTime { get; set; }

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

            [NameInMap("UpdateTime")]
            [Validation(Required=true)]
            public string UpdateTime { get; set; }

            [NameInMap("ResourceDriftStatus")]
            [Validation(Required=true)]
            public string ResourceDriftStatus { get; set; }

            [NameInMap("DriftDetectionTime")]
            [Validation(Required=true)]
            public string DriftDetectionTime { get; set; }

        }

    }

}
