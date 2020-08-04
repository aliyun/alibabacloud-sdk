// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDisksFullStatusRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("DiskId")]
        [Validation(Required=false)]
        public List<string> DiskId { get; set; }

        [NameInMap("EventId")]
        [Validation(Required=false)]
        public List<string> EventId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=false)]
        public string Status { get; set; }

        [NameInMap("HealthStatus")]
        [Validation(Required=false)]
        public string HealthStatus { get; set; }

        [NameInMap("EventType")]
        [Validation(Required=false)]
        public string EventType { get; set; }

        [NameInMap("EventTime")]
        [Validation(Required=true)]
        public DescribeDisksFullStatusRequestEventTime EventTime { get; set; }
        public class DescribeDisksFullStatusRequestEventTime : TeaModel {
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
