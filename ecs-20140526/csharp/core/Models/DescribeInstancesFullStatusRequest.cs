// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstancesFullStatusRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=false)]
        public List<string> InstanceId { get; set; }

        [NameInMap("EventId")]
        [Validation(Required=false)]
        public List<string> EventId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=false)]
        public string Status { get; set; }

        [NameInMap("HealthStatus")]
        [Validation(Required=false)]
        public string HealthStatus { get; set; }

        [NameInMap("InstanceEventType")]
        [Validation(Required=false)]
        public List<string> InstanceEventType { get; set; }

        [NameInMap("EventType")]
        [Validation(Required=false)]
        public string EventType { get; set; }

        [NameInMap("NotBefore")]
        [Validation(Required=true)]
        public DescribeInstancesFullStatusRequestNotBefore NotBefore { get; set; }
        public class DescribeInstancesFullStatusRequestNotBefore : TeaModel {
            [NameInMap("Start")]
            [Validation(Required=false)]
            public string Start { get; set; }
            [NameInMap("End")]
            [Validation(Required=false)]
            public string End { get; set; }
        };

        [NameInMap("EventPublishTime")]
        [Validation(Required=true)]
        public DescribeInstancesFullStatusRequestEventPublishTime EventPublishTime { get; set; }
        public class DescribeInstancesFullStatusRequestEventPublishTime : TeaModel {
            [NameInMap("Start")]
            [Validation(Required=false)]
            public string Start { get; set; }
            [NameInMap("End")]
            [Validation(Required=false)]
            public string End { get; set; }
        };

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
