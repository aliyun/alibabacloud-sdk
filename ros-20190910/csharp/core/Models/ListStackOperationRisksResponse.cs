// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListStackOperationRisksResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RiskResources")]
        [Validation(Required=true)]
        public List<ListStackOperationRisksResponseRiskResources> RiskResources { get; set; }
        public class ListStackOperationRisksResponseRiskResources : TeaModel {
            [NameInMap("LogicalResourceId")]
            [Validation(Required=true)]
            public string LogicalResourceId { get; set; }

            [NameInMap("PhysicalResourceId")]
            [Validation(Required=true)]
            public string PhysicalResourceId { get; set; }

            [NameInMap("ResourceType")]
            [Validation(Required=true)]
            public string ResourceType { get; set; }

            [NameInMap("Reason")]
            [Validation(Required=true)]
            public string Reason { get; set; }

            [NameInMap("RiskType")]
            [Validation(Required=true)]
            public string RiskType { get; set; }

            [NameInMap("Code")]
            [Validation(Required=true)]
            public string Code { get; set; }

            [NameInMap("Message")]
            [Validation(Required=true)]
            public string Message { get; set; }

            [NameInMap("RequestId")]
            [Validation(Required=true)]
            public string RequestId { get; set; }

        }

    }

}
