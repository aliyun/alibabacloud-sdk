// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBProxyEndpointResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBProxyEndpointId")]
        [Validation(Required=true)]
        public string DBProxyEndpointId { get; set; }

        [NameInMap("DBProxyConnectString")]
        [Validation(Required=true)]
        public string DBProxyConnectString { get; set; }

        [NameInMap("DBProxyConnectStringPort")]
        [Validation(Required=true)]
        public string DBProxyConnectStringPort { get; set; }

        [NameInMap("DBProxyConnectStringNetType")]
        [Validation(Required=true)]
        public string DBProxyConnectStringNetType { get; set; }

        [NameInMap("DBProxyFeatures")]
        [Validation(Required=true)]
        public string DBProxyFeatures { get; set; }

        [NameInMap("ReadOnlyInstanceMaxDelayTime")]
        [Validation(Required=true)]
        public string ReadOnlyInstanceMaxDelayTime { get; set; }

        [NameInMap("ReadOnlyInstanceDistributionType")]
        [Validation(Required=true)]
        public string ReadOnlyInstanceDistributionType { get; set; }

        [NameInMap("ReadOnlyInstanceWeight")]
        [Validation(Required=true)]
        public string ReadOnlyInstanceWeight { get; set; }

    }

}
