// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeTasksResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TaskSet")]
        [Validation(Required=true)]
        public DescribeTasksResponseTaskSet TaskSet { get; set; }
        public class DescribeTasksResponseTaskSet : TeaModel {
            [NameInMap("Task")]
            [Validation(Required=true)]
            public List<DescribeTasksResponseTaskSetTask> Task { get; set; }
            public class DescribeTasksResponseTaskSetTask : TeaModel {
                    public string TaskId { get; set; }
                    public string TaskAction { get; set; }
                    public string TaskStatus { get; set; }
                    public string SupportCancel { get; set; }
                    public string CreationTime { get; set; }
                    public string FinishedTime { get; set; }
            }
        };

    }

}
