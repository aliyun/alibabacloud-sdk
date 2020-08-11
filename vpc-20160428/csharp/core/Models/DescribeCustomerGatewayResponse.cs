// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeCustomerGatewayResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("CustomerGatewayId")]
        [Validation(Required=true)]
        public string CustomerGatewayId { get; set; }

        [NameInMap("IpAddress")]
        [Validation(Required=true)]
        public string IpAddress { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public long CreateTime { get; set; }

        [NameInMap("Asn")]
        [Validation(Required=true)]
        public int? Asn { get; set; }

    }

}
