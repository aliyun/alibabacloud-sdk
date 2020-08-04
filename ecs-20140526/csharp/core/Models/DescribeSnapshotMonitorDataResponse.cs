// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeSnapshotMonitorDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MonitorData")]
        [Validation(Required=true)]
        public DescribeSnapshotMonitorDataResponseMonitorData MonitorData { get; set; }
        public class DescribeSnapshotMonitorDataResponseMonitorData : TeaModel {
            [NameInMap("DataPoint")]
            [Validation(Required=true)]
            public List<DescribeSnapshotMonitorDataResponseMonitorDataDataPoint> DataPoint { get; set; }
            public class DescribeSnapshotMonitorDataResponseMonitorDataDataPoint : TeaModel {
                    public string TimeStamp { get; set; }
                    public long Size { get; set; }
            }
        };

    }

}
