// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeTasksResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeTasksResponseItems Items { get; set; }
        public class DescribeTasksResponseItems : TeaModel {
            [NameInMap("TaskProgressInfo")]
            [Validation(Required=true)]
            public List<DescribeTasksResponseItemsTaskProgressInfo> TaskProgressInfo { get; set; }
            public class DescribeTasksResponseItemsTaskProgressInfo : TeaModel {
                    public string DBName { get; set; }
                    public string BeginTime { get; set; }
                    public string ProgressInfo { get; set; }
                    public string FinishTime { get; set; }
                    public string TaskAction { get; set; }
                    public string TaskId { get; set; }
                    public string Progress { get; set; }
                    public string ExpectedFinishTime { get; set; }
                    public string Status { get; set; }
                    public string TaskErrorCode { get; set; }
                    public string TaskErrorMessage { get; set; }
                    public string StepsInfo { get; set; }
                    public int? Remain { get; set; }
                    public string StepProgressInfo { get; set; }
                    public string CurrentStepName { get; set; }
            }
        };

    }

}
