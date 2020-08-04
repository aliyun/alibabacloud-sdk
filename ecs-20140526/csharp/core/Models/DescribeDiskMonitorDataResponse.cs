// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDiskMonitorDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("MonitorData")]
        [Validation(Required=true)]
        public DescribeDiskMonitorDataResponseMonitorData MonitorData { get; set; }
        public class DescribeDiskMonitorDataResponseMonitorData : TeaModel {
            [NameInMap("DiskMonitorData")]
            [Validation(Required=true)]
            public List<DescribeDiskMonitorDataResponseMonitorDataDiskMonitorData> DiskMonitorData { get; set; }
            public class DescribeDiskMonitorDataResponseMonitorDataDiskMonitorData : TeaModel {
                    public string DiskId { get; set; }
                    public int? IOPSRead { get; set; }
                    public int? IOPSWrite { get; set; }
                    public int? IOPSTotal { get; set; }
                    public int? BPSRead { get; set; }
                    public int? BPSWrite { get; set; }
                    public int? BPSTotal { get; set; }
                    public int? LatencyRead { get; set; }
                    public int? LatencyWrite { get; set; }
                    public string TimeStamp { get; set; }
            }
        };

    }

}
