// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetStackInstanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("StackInstance")]
        [Validation(Required=true)]
        public GetStackInstanceResponseStackInstance StackInstance { get; set; }
        public class GetStackInstanceResponseStackInstance : TeaModel {
            [NameInMap("StackGroupName")]
            [Validation(Required=true)]
            public string StackGroupName { get; set; }
            [NameInMap("StackGroupId")]
            [Validation(Required=true)]
            public string StackGroupId { get; set; }
            [NameInMap("StackId")]
            [Validation(Required=true)]
            public string StackId { get; set; }
            [NameInMap("AccountId")]
            [Validation(Required=true)]
            public string AccountId { get; set; }
            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("StatusReason")]
            [Validation(Required=true)]
            public string StatusReason { get; set; }
            [NameInMap("StackDriftStatus")]
            [Validation(Required=true)]
            public string StackDriftStatus { get; set; }
            [NameInMap("DriftDetectionTime")]
            [Validation(Required=true)]
            public string DriftDetectionTime { get; set; }
            [NameInMap("ParameterOverrides")]
            [Validation(Required=true)]
            public List<GetStackInstanceResponseStackInstanceParameterOverrides> ParameterOverrides { get; set; }
            public class GetStackInstanceResponseStackInstanceParameterOverrides : TeaModel {
                    public string ParameterKey { get; set; }
                    public string ParameterValue { get; set; }
            }
        };

    }

}
