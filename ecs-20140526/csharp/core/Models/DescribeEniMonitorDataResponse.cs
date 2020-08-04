// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeEniMonitorDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("MonitorData")]
        [Validation(Required=true)]
        public DescribeEniMonitorDataResponseMonitorData MonitorData { get; set; }
        public class DescribeEniMonitorDataResponseMonitorData : TeaModel {
            [NameInMap("EniMonitorData")]
            [Validation(Required=true)]
            public List<DescribeEniMonitorDataResponseMonitorDataEniMonitorData> EniMonitorData { get; set; }
            public class DescribeEniMonitorDataResponseMonitorDataEniMonitorData : TeaModel {
                    public string EniId { get; set; }
                    public string TimeStamp { get; set; }
                    public string PacketTx { get; set; }
                    public string PacketRx { get; set; }
                    public string IntranetTx { get; set; }
                    public string IntranetRx { get; set; }
                    public string DropPacketTx { get; set; }
                    public string DropPacketRx { get; set; }
            }
        };

    }

}
