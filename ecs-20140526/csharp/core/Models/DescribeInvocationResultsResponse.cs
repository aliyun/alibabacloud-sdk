// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInvocationResultsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Invocation")]
        [Validation(Required=true)]
        public DescribeInvocationResultsResponseInvocation Invocation { get; set; }
        public class DescribeInvocationResultsResponseInvocation : TeaModel {
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public long PageSize { get; set; }
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public long PageNumber { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public long TotalCount { get; set; }
            [NameInMap("InvocationResults")]
            [Validation(Required=true)]
            public DescribeInvocationResultsResponseInvocationInvocationResults InvocationResults { get; set; }
            public class DescribeInvocationResultsResponseInvocationInvocationResults : TeaModel {
                [NameInMap("InvocationResult")]
                [Validation(Required=true)]
                public List<DescribeInvocationResultsResponseInvocationInvocationResultsInvocationResult> InvocationResult { get; set; }
                public class DescribeInvocationResultsResponseInvocationInvocationResultsInvocationResult : TeaModel {
                    [NameInMap("CommandId")]
                    [Validation(Required=true)]
                    public string CommandId { get; set; }

                    [NameInMap("InvokeId")]
                    [Validation(Required=true)]
                    public string InvokeId { get; set; }

                    [NameInMap("InstanceId")]
                    [Validation(Required=true)]
                    public string InstanceId { get; set; }

                    [NameInMap("StartTime")]
                    [Validation(Required=true)]
                    public string StartTime { get; set; }

                    [NameInMap("StopTime")]
                    [Validation(Required=true)]
                    public string StopTime { get; set; }

                    [NameInMap("FinishedTime")]
                    [Validation(Required=true)]
                    public string FinishedTime { get; set; }

                    [NameInMap("Repeats")]
                    [Validation(Required=true)]
                    public int? Repeats { get; set; }

                    [NameInMap("Output")]
                    [Validation(Required=true)]
                    public string Output { get; set; }

                    [NameInMap("Dropped")]
                    [Validation(Required=true)]
                    public int? Dropped { get; set; }

                    [NameInMap("InvokeRecordStatus")]
                    [Validation(Required=true)]
                    public string InvokeRecordStatus { get; set; }

                    [NameInMap("InvocationStatus")]
                    [Validation(Required=true)]
                    public string InvocationStatus { get; set; }

                    [NameInMap("ExitCode")]
                    [Validation(Required=true)]
                    public long ExitCode { get; set; }

                    [NameInMap("ErrorCode")]
                    [Validation(Required=true)]
                    public string ErrorCode { get; set; }

                    [NameInMap("ErrorInfo")]
                    [Validation(Required=true)]
                    public string ErrorInfo { get; set; }

                }

            }
        };

    }

}
