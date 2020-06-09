// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmMonitorConfigResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MonitorConfigId")]
        [Validation(Required=true)]
        public string MonitorConfigId { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public string CreateTime { get; set; }

        [NameInMap("CreateTimestamp")]
        [Validation(Required=true)]
        public long CreateTimestamp { get; set; }

        [NameInMap("UpdateTime")]
        [Validation(Required=true)]
        public string UpdateTime { get; set; }

        [NameInMap("UpdateTimestamp")]
        [Validation(Required=true)]
        public long UpdateTimestamp { get; set; }

        [NameInMap("ProtocolType")]
        [Validation(Required=true)]
        public string ProtocolType { get; set; }

        [NameInMap("Interval")]
        [Validation(Required=true)]
        public int? Interval { get; set; }

        [NameInMap("EvaluationCount")]
        [Validation(Required=true)]
        public int? EvaluationCount { get; set; }

        [NameInMap("Timeout")]
        [Validation(Required=true)]
        public int? Timeout { get; set; }

        [NameInMap("MonitorExtendInfo")]
        [Validation(Required=true)]
        public string MonitorExtendInfo { get; set; }

        [NameInMap("IspCityNodes")]
        [Validation(Required=true)]
        public DescribeGtmMonitorConfigResponseIspCityNodes IspCityNodes { get; set; }
        public class DescribeGtmMonitorConfigResponseIspCityNodes : TeaModel {
            [NameInMap("IspCityNode")]
            [Validation(Required=true)]
            public List<DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode> IspCityNode { get; set; }
            public class DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode : TeaModel {
                    public string CountryName { get; set; }
                    public string CountryCode { get; set; }
                    public string CityName { get; set; }
                    public string CityCode { get; set; }
                    public string IspCode { get; set; }
                    public string IspName { get; set; }
            }
        };

    }

}
