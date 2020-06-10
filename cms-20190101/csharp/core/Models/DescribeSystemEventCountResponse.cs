// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeSystemEventCountResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("SystemEventCounts")]
        [Validation(Required=true)]
        public DescribeSystemEventCountResponseSystemEventCounts SystemEventCounts { get; set; }
        public class DescribeSystemEventCountResponseSystemEventCounts : TeaModel {
            [NameInMap("SystemEventCount")]
            [Validation(Required=true)]
            public List<DescribeSystemEventCountResponseSystemEventCountsSystemEventCount> SystemEventCount { get; set; }
            public class DescribeSystemEventCountResponseSystemEventCountsSystemEventCount : TeaModel {
                    public string Content { get; set; }
                    public string Product { get; set; }
                    public string Name { get; set; }
                    public string GroupId { get; set; }
                    public long Num { get; set; }
                    public string Level { get; set; }
                    public string Status { get; set; }
                    public string ResourceId { get; set; }
                    public string RegionId { get; set; }
                    public string InstanceName { get; set; }
                    public long Time { get; set; }
            }
        };

    }

}
