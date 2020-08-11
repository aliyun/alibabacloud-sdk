// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeEipMonitorDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("EipMonitorDatas")]
        [Validation(Required=true)]
        public DescribeEipMonitorDataResponseEipMonitorDatas EipMonitorDatas { get; set; }
        public class DescribeEipMonitorDataResponseEipMonitorDatas : TeaModel {
            [NameInMap("EipMonitorData")]
            [Validation(Required=true)]
            public List<DescribeEipMonitorDataResponseEipMonitorDatasEipMonitorData> EipMonitorData { get; set; }
            public class DescribeEipMonitorDataResponseEipMonitorDatasEipMonitorData : TeaModel {
                    public long EipRX { get; set; }
                    public long EipTX { get; set; }
                    public int? EipFlow { get; set; }
                    public int? EipBandwidth { get; set; }
                    public int? EipPackets { get; set; }
                    public string TimeStamp { get; set; }
            }
        };

    }

}
