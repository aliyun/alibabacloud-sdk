// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceHistoryEventsRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=false)]
        public string InstanceId { get; set; }

        [NameInMap("EventId")]
        [Validation(Required=false)]
        public List<string> EventId { get; set; }

        [NameInMap("InstanceEventCycleStatus")]
        [Validation(Required=false)]
        public List<string> InstanceEventCycleStatus { get; set; }

        [NameInMap("EventCycleStatus")]
        [Validation(Required=false)]
        public string EventCycleStatus { get; set; }

        [NameInMap("InstanceEventType")]
        [Validation(Required=false)]
        public List<string> InstanceEventType { get; set; }

        [NameInMap("EventType")]
        [Validation(Required=false)]
        public string EventType { get; set; }

        [NameInMap("NotBefore")]
        [Validation(Required=true)]
        public DescribeInstanceHistoryEventsRequestNotBefore NotBefore { get; set; }
        public class DescribeInstanceHistoryEventsRequestNotBefore : TeaModel {
            [NameInMap("Start")]
            [Validation(Required=false)]
            public string Start { get; set; }
            [NameInMap("End")]
            [Validation(Required=false)]
            public string End { get; set; }
        };

        [NameInMap("EventPublishTime")]
        [Validation(Required=true)]
        public DescribeInstanceHistoryEventsRequestEventPublishTime EventPublishTime { get; set; }
        public class DescribeInstanceHistoryEventsRequestEventPublishTime : TeaModel {
            [NameInMap("Start")]
            [Validation(Required=false)]
            public string Start { get; set; }
            [NameInMap("End")]
            [Validation(Required=false)]
            public string End { get; set; }
        };

        [NameInMap("ImpactLevel")]
        [Validation(Required=false)]
        public string ImpactLevel { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
