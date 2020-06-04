// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodRefreshTasksResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public long PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public long PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public long TotalCount { get; set; }

        [NameInMap("Tasks")]
        [Validation(Required=true)]
        public DescribeVodRefreshTasksResponseTasks Tasks { get; set; }
        public class DescribeVodRefreshTasksResponseTasks : TeaModel {
            [NameInMap("Task")]
            [Validation(Required=true)]
            public List<DescribeVodRefreshTasksResponseTasksTask> Task { get; set; }
            public class DescribeVodRefreshTasksResponseTasksTask : TeaModel {
                    public string TaskId { get; set; }
                    public string ObjectPath { get; set; }
                    public string Process { get; set; }
                    public string Status { get; set; }
                    public string CreationTime { get; set; }
                    public string Description { get; set; }
                    public string ObjectType { get; set; }
            }
        };

    }

}
