// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmAccessStrategyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("StrategyId")]
        [Validation(Required=true)]
        public string StrategyId { get; set; }

        [NameInMap("StrategyName")]
        [Validation(Required=true)]
        public string StrategyName { get; set; }

        [NameInMap("DefultAddrPoolId")]
        [Validation(Required=true)]
        public string DefultAddrPoolId { get; set; }

        [NameInMap("DefaultAddrPoolName")]
        [Validation(Required=true)]
        public string DefaultAddrPoolName { get; set; }

        [NameInMap("FailoverAddrPoolId")]
        [Validation(Required=true)]
        public string FailoverAddrPoolId { get; set; }

        [NameInMap("FailoverAddrPoolName")]
        [Validation(Required=true)]
        public string FailoverAddrPoolName { get; set; }

        [NameInMap("StrategyMode")]
        [Validation(Required=true)]
        public string StrategyMode { get; set; }

        [NameInMap("AccessMode")]
        [Validation(Required=true)]
        public string AccessMode { get; set; }

        [NameInMap("AccessStatus")]
        [Validation(Required=true)]
        public string AccessStatus { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("DefaultAddrPoolStatus")]
        [Validation(Required=true)]
        public string DefaultAddrPoolStatus { get; set; }

        [NameInMap("FailoverAddrPoolStatus")]
        [Validation(Required=true)]
        public string FailoverAddrPoolStatus { get; set; }

        [NameInMap("DefaultAddrPoolMonitorStatus")]
        [Validation(Required=true)]
        public string DefaultAddrPoolMonitorStatus { get; set; }

        [NameInMap("FailoverAddrPoolMonitorStatus")]
        [Validation(Required=true)]
        public string FailoverAddrPoolMonitorStatus { get; set; }

        [NameInMap("Lines")]
        [Validation(Required=true)]
        public DescribeGtmAccessStrategyResponseLines Lines { get; set; }
        public class DescribeGtmAccessStrategyResponseLines : TeaModel {
            [NameInMap("Line")]
            [Validation(Required=true)]
            public List<DescribeGtmAccessStrategyResponseLinesLine> Line { get; set; }
            public class DescribeGtmAccessStrategyResponseLinesLine : TeaModel {
                    public string LineCode { get; set; }
                    public string LineName { get; set; }
                    public string GroupCode { get; set; }
                    public string GroupName { get; set; }
            }
        };

    }

}
