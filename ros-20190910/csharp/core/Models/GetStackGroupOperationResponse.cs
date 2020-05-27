// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetStackGroupOperationResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("StackGroupOperation")]
        [Validation(Required=true)]
        public GetStackGroupOperationResponseStackGroupOperation StackGroupOperation { get; set; }
        public class GetStackGroupOperationResponseStackGroupOperation : TeaModel {
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
            [NameInMap("RetainStacks")]
            [Validation(Required=true)]
            public bool? RetainStacks { get; set; }
            [NameInMap("AdministratorRoleName")]
            [Validation(Required=true)]
            public string AdministratorRoleName { get; set; }
            [NameInMap("ExecutionRoleName")]
            [Validation(Required=true)]
            public string ExecutionRoleName { get; set; }
            [NameInMap("OperationPreferences")]
            [Validation(Required=true)]
            public GetStackGroupOperationResponseStackGroupOperationOperationPreferences OperationPreferences { get; set; }
            public class GetStackGroupOperationResponseStackGroupOperationOperationPreferences : TeaModel {
                [NameInMap("FailureToleranceCount")]
                [Validation(Required=true)]
                public int? FailureToleranceCount { get; set; }

                [NameInMap("FailureTolerancePercentage")]
                [Validation(Required=true)]
                public int? FailureTolerancePercentage { get; set; }

                [NameInMap("MaxConcurrentCount")]
                [Validation(Required=true)]
                public int? MaxConcurrentCount { get; set; }

                [NameInMap("MaxConcurrentPercentage")]
                [Validation(Required=true)]
                public int? MaxConcurrentPercentage { get; set; }

                [NameInMap("RegionIdsOrder")]
                [Validation(Required=true)]
                public List<string> RegionIdsOrder { get; set; }

            }
            [NameInMap("StackGroupDriftDetectionDetail")]
            [Validation(Required=true)]
            public GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail StackGroupDriftDetectionDetail { get; set; }
            public class GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail : TeaModel {
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
