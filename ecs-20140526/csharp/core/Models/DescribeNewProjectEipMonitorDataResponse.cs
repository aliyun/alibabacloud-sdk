// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeNewProjectEipMonitorDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("EipMonitorDatas")]
        [Validation(Required=true)]
        public DescribeNewProjectEipMonitorDataResponseEipMonitorDatas EipMonitorDatas { get; set; }
        public class DescribeNewProjectEipMonitorDataResponseEipMonitorDatas : TeaModel {
            [NameInMap("EipMonitorData")]
            [Validation(Required=true)]
            public List<DescribeNewProjectEipMonitorDataResponseEipMonitorDatasEipMonitorData> EipMonitorData { get; set; }
            public class DescribeNewProjectEipMonitorDataResponseEipMonitorDatasEipMonitorData : TeaModel {
                    public int? EipRX { get; set; }
                    public int? EipTX { get; set; }
                    public int? EipFlow { get; set; }
                    public int? EipBandwidth { get; set; }
                    public int? EipPackets { get; set; }
                    public string TimeStamp { get; set; }
            }
        };

    }

}
