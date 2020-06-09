// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmAccessStrategyAvailableConfigResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AddrPools")]
        [Validation(Required=true)]
        public DescribeGtmAccessStrategyAvailableConfigResponseAddrPools AddrPools { get; set; }
        public class DescribeGtmAccessStrategyAvailableConfigResponseAddrPools : TeaModel {
            [NameInMap("AddrPool")]
            [Validation(Required=true)]
            public List<DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool> AddrPool { get; set; }
            public class DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool : TeaModel {
                    public string AddrPoolId { get; set; }
                    public string AddrPoolName { get; set; }
            }
        };

        [NameInMap("Lines")]
        [Validation(Required=true)]
        public DescribeGtmAccessStrategyAvailableConfigResponseLines Lines { get; set; }
        public class DescribeGtmAccessStrategyAvailableConfigResponseLines : TeaModel {
            [NameInMap("Line")]
            [Validation(Required=true)]
            public List<DescribeGtmAccessStrategyAvailableConfigResponseLinesLine> Line { get; set; }
            public class DescribeGtmAccessStrategyAvailableConfigResponseLinesLine : TeaModel {
                    public string LineCode { get; set; }
                    public string LineName { get; set; }
                    public string GroupCode { get; set; }
                    public string GroupName { get; set; }
                    public string Status { get; set; }
                    public string FatherCode { get; set; }
            }
        };

    }

}
