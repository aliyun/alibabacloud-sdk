// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceMonitorDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MonitorData")]
        [Validation(Required=true)]
        public DescribeInstanceMonitorDataResponseMonitorData MonitorData { get; set; }
        public class DescribeInstanceMonitorDataResponseMonitorData : TeaModel {
            [NameInMap("InstanceMonitorData")]
            [Validation(Required=true)]
            public List<DescribeInstanceMonitorDataResponseMonitorDataInstanceMonitorData> InstanceMonitorData { get; set; }
            public class DescribeInstanceMonitorDataResponseMonitorDataInstanceMonitorData : TeaModel {
                    public string InstanceId { get; set; }
                    public int? CPU { get; set; }
                    public int? IntranetRX { get; set; }
                    public int? IntranetTX { get; set; }
                    public int? IntranetBandwidth { get; set; }
                    public int? InternetRX { get; set; }
                    public int? InternetTX { get; set; }
                    public int? InternetBandwidth { get; set; }
                    public int? IOPSRead { get; set; }
                    public int? IOPSWrite { get; set; }
                    public int? BPSRead { get; set; }
                    public int? BPSWrite { get; set; }
                    public float? CPUCreditUsage { get; set; }
                    public float? CPUCreditBalance { get; set; }
                    public float? CPUAdvanceCreditBalance { get; set; }
                    public float? CPUNotpaidSurplusCreditUsage { get; set; }
                    public string TimeStamp { get; set; }
            }
        };

    }

}
