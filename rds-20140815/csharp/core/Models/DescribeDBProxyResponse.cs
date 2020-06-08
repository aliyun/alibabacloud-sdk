// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBProxyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBProxyServiceStatus")]
        [Validation(Required=true)]
        public string DBProxyServiceStatus { get; set; }

        [NameInMap("DBProxyInstanceType")]
        [Validation(Required=true)]
        public string DBProxyInstanceType { get; set; }

        [NameInMap("DBProxyInstanceNum")]
        [Validation(Required=true)]
        public int? DBProxyInstanceNum { get; set; }

        [NameInMap("DBProxyInstanceStatus")]
        [Validation(Required=true)]
        public string DBProxyInstanceStatus { get; set; }

        [NameInMap("DBProxyInstanceCurrentMinorVersion")]
        [Validation(Required=true)]
        public string DBProxyInstanceCurrentMinorVersion { get; set; }

        [NameInMap("DBProxyInstanceLatestMinorVersion")]
        [Validation(Required=true)]
        public string DBProxyInstanceLatestMinorVersion { get; set; }

        [NameInMap("DBProxyInstanceName")]
        [Validation(Required=true)]
        public string DBProxyInstanceName { get; set; }

        [NameInMap("DBProxyConnectStringItems")]
        [Validation(Required=true)]
        public DescribeDBProxyResponseDBProxyConnectStringItems DBProxyConnectStringItems { get; set; }
        public class DescribeDBProxyResponseDBProxyConnectStringItems : TeaModel {
            [NameInMap("DBProxyConnectStringItems")]
            [Validation(Required=true)]
            public List<DescribeDBProxyResponseDBProxyConnectStringItemsDBProxyConnectStringItems> DBProxyConnectStringItems { get; set; }
            public class DescribeDBProxyResponseDBProxyConnectStringItemsDBProxyConnectStringItems : TeaModel {
                    public string DBProxyEndpointId { get; set; }
                    public string DBProxyConnectString { get; set; }
                    public string DBProxyConnectStringPort { get; set; }
                    public string DBProxyConnectStringNetType { get; set; }
                    public string DBProxyVpcInstanceId { get; set; }
                    public string DBProxyEndpointName { get; set; }
                    public string DBProxyConnectStringNetWorkType { get; set; }
            }
        };

    }

}
