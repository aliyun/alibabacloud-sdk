// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeEventsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("EventItems")]
        [Validation(Required=true)]
        public DescribeEventsResponseEventItems EventItems { get; set; }
        public class DescribeEventsResponseEventItems : TeaModel {
            [NameInMap("EventItems")]
            [Validation(Required=true)]
            public List<DescribeEventsResponseEventItemsEventItems> EventItems { get; set; }
            public class DescribeEventsResponseEventItemsEventItems : TeaModel {
                    public int? EventId { get; set; }
                    public string EventType { get; set; }
                    public string EventName { get; set; }
                    public string EventTime { get; set; }
                    public string ResourceType { get; set; }
                    public string ResourceName { get; set; }
                    public string RegionId { get; set; }
                    public string EventUserType { get; set; }
                    public string EventReason { get; set; }
                    public string EventPayload { get; set; }
                    public string EventRecordTime { get; set; }
            }
        };

    }

}
