// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetStackGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("StackGroup")]
        [Validation(Required=true)]
        public GetStackGroupResponseStackGroup StackGroup { get; set; }
        public class GetStackGroupResponseStackGroup : TeaModel {
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
            [NameInMap("TemplateBody")]
            [Validation(Required=true)]
            public string TemplateBody { get; set; }
            [NameInMap("ExecutionRoleName")]
            [Validation(Required=true)]
            public string ExecutionRoleName { get; set; }
            [NameInMap("AdministrationRoleName")]
            [Validation(Required=true)]
            public string AdministrationRoleName { get; set; }
            [NameInMap("Parameters")]
            [Validation(Required=true)]
            public List<GetStackGroupResponseStackGroupParameters> Parameters { get; set; }
            public class GetStackGroupResponseStackGroupParameters : TeaModel {
                    public string ParameterKey { get; set; }
                    public string ParameterValue { get; set; }
            }
            [NameInMap("StackGroupDriftDetectionDetail")]
            [Validation(Required=true)]
            public GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail StackGroupDriftDetectionDetail { get; set; }
            public class GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail : TeaModel {
                [NameInMap("DriftDetectionTime")]
                [Validation(Required=true)]
                public string DriftDetectionTime { get; set; }

                [NameInMap("StackGroupDriftStatus")]
                [Validation(Required=true)]
                public string StackGroupDriftStatus { get; set; }

                [NameInMap("DriftDetectionStatus")]
                [Validation(Required=true)]
                public string DriftDetectionStatus { get; set; }

                [NameInMap("DriftedStackInstancesCount")]
                [Validation(Required=true)]
                public int? DriftedStackInstancesCount { get; set; }

                [NameInMap("FailedStackInstancesCount")]
                [Validation(Required=true)]
                public int? FailedStackInstancesCount { get; set; }

                [NameInMap("CancelledStackInstancesCount")]
                [Validation(Required=true)]
                public int? CancelledStackInstancesCount { get; set; }

                [NameInMap("InProgressStackInstancesCount")]
                [Validation(Required=true)]
                public int? InProgressStackInstancesCount { get; set; }

                [NameInMap("InSyncStackInstancesCount")]
                [Validation(Required=true)]
                public int? InSyncStackInstancesCount { get; set; }

                [NameInMap("TotalStackInstancesCount")]
                [Validation(Required=true)]
                public int? TotalStackInstancesCount { get; set; }

            }
        };

    }

}
