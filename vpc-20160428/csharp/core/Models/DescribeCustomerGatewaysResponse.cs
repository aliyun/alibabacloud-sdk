// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeCustomerGatewaysResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("CustomerGateways")]
        [Validation(Required=true)]
        public DescribeCustomerGatewaysResponseCustomerGateways CustomerGateways { get; set; }
        public class DescribeCustomerGatewaysResponseCustomerGateways : TeaModel {
            [NameInMap("CustomerGateway")]
            [Validation(Required=true)]
            public List<DescribeCustomerGatewaysResponseCustomerGatewaysCustomerGateway> CustomerGateway { get; set; }
            public class DescribeCustomerGatewaysResponseCustomerGatewaysCustomerGateway : TeaModel {
                    public string CustomerGatewayId { get; set; }
                    public string Name { get; set; }
                    public string IpAddress { get; set; }
                    public string Description { get; set; }
                    public long CreateTime { get; set; }
                    public int? Asn { get; set; }
            }
        };

    }

}
