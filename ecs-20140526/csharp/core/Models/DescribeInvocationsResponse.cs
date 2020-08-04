// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInvocationsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public long TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public long PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public long PageSize { get; set; }

        [NameInMap("Invocations")]
        [Validation(Required=true)]
        public DescribeInvocationsResponseInvocations Invocations { get; set; }
        public class DescribeInvocationsResponseInvocations : TeaModel {
            [NameInMap("Invocation")]
            [Validation(Required=true)]
            public List<DescribeInvocationsResponseInvocationsInvocation> Invocation { get; set; }
            public class DescribeInvocationsResponseInvocationsInvocation : TeaModel {
                    public string InvokeId { get; set; }
                    public string CreationTime { get; set; }
                    public string CommandId { get; set; }
                    public string CommandType { get; set; }
                    public string CommandName { get; set; }
                    public string CommandContent { get; set; }
                    public string Frequency { get; set; }
                    public bool? Timed { get; set; }
                    public string InvokeStatus { get; set; }
                    public string InvocationStatus { get; set; }
                    public string Parameters { get; set; }
                    public DescribeInvocationsResponseInvocationsInvocationInvokeInstances InvokeInstances { get; set; }
                    public class DescribeInvocationsResponseInvocationsInvocationInvokeInstances : TeaModel {
                        [NameInMap("InvokeInstance")]
                        [Validation(Required=true)]
                        public List<DescribeInvocationsResponseInvocationsInvocationInvokeInstancesInvokeInstance> InvokeInstance { get; set; }
                        public class DescribeInvocationsResponseInvocationsInvocationInvokeInstancesInvokeInstance : TeaModel {
                            [NameInMap("InstanceId")]
                            [Validation(Required=true)]
                            public string InstanceId { get; set; }

                            [NameInMap("Repeats")]
                            [Validation(Required=true)]
                            public int? Repeats { get; set; }

                            [NameInMap("InstanceInvokeStatus")]
                            [Validation(Required=true)]
                            public string InstanceInvokeStatus { get; set; }

                            [NameInMap("InvocationStatus")]
                            [Validation(Required=true)]
                            public string InvocationStatus { get; set; }

                            [NameInMap("Output")]
                            [Validation(Required=true)]
                            public string Output { get; set; }

                            [NameInMap("ExitCode")]
                            [Validation(Required=true)]
                            public long ExitCode { get; set; }

                            [NameInMap("Dropped")]
                            [Validation(Required=true)]
                            public int? Dropped { get; set; }

                            [NameInMap("ErrorCode")]
                            [Validation(Required=true)]
                            public string ErrorCode { get; set; }

                            [NameInMap("ErrorInfo")]
                            [Validation(Required=true)]
                            public string ErrorInfo { get; set; }

                            [NameInMap("CreationTime")]
                            [Validation(Required=true)]
                            public string CreationTime { get; set; }

                            [NameInMap("StartTime")]
                            [Validation(Required=true)]
                            public string StartTime { get; set; }

                            [NameInMap("StopTime")]
                            [Validation(Required=true)]
                            public string StopTime { get; set; }

                            [NameInMap("FinishTime")]
                            [Validation(Required=true)]
                            public string FinishTime { get; set; }

                            [NameInMap("UpdateTime")]
                            [Validation(Required=true)]
                            public string UpdateTime { get; set; }

                        }

                    }
            }
        };

    }

}
