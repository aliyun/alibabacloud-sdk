// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeEipGatewayInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("EipInfos")]
        [Validation(Required=true)]
        public DescribeEipGatewayInfoResponseEipInfos EipInfos { get; set; }
        public class DescribeEipGatewayInfoResponseEipInfos : TeaModel {
            [NameInMap("EipInfo")]
            [Validation(Required=true)]
            public List<DescribeEipGatewayInfoResponseEipInfosEipInfo> EipInfo { get; set; }
            public class DescribeEipGatewayInfoResponseEipInfosEipInfo : TeaModel {
                    public string Ip { get; set; }
                    public string IpGw { get; set; }
                    public string IpMask { get; set; }
            }
        };

    }

}
