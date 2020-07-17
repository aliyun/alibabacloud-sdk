// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBClusterEndpointsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public List<DescribeDBClusterEndpointsResponseItems> Items { get; set; }
        public class DescribeDBClusterEndpointsResponseItems : TeaModel {
            [NameInMap("DBEndpointId")]
            [Validation(Required=true)]
            public string DBEndpointId { get; set; }

            [NameInMap("EndpointType")]
            [Validation(Required=true)]
            public string EndpointType { get; set; }

            [NameInMap("Nodes")]
            [Validation(Required=true)]
            public string Nodes { get; set; }

            [NameInMap("ReadWriteMode")]
            [Validation(Required=true)]
            public string ReadWriteMode { get; set; }

            [NameInMap("AutoAddNewNodes")]
            [Validation(Required=true)]
            public string AutoAddNewNodes { get; set; }

            [NameInMap("EndpointConfig")]
            [Validation(Required=true)]
            public string EndpointConfig { get; set; }

            [NameInMap("NodeWithRoles")]
            [Validation(Required=true)]
            public string NodeWithRoles { get; set; }

            [NameInMap("AddressItems")]
            [Validation(Required=true)]
            public List<DescribeDBClusterEndpointsResponseItemsAddressItems> AddressItems { get; set; }
            public class DescribeDBClusterEndpointsResponseItemsAddressItems : TeaModel {
                [NameInMap("ConnectionString")]
                [Validation(Required=true)]
                public string ConnectionString { get; set; }

                [NameInMap("IPAddress")]
                [Validation(Required=true)]
                public string IPAddress { get; set; }

                [NameInMap("NetType")]
                [Validation(Required=true)]
                public string NetType { get; set; }

                [NameInMap("Port")]
                [Validation(Required=true)]
                public string Port { get; set; }

                [NameInMap("VPCId")]
                [Validation(Required=true)]
                public string VPCId { get; set; }

                [NameInMap("VSwitchId")]
                [Validation(Required=true)]
                public string VSwitchId { get; set; }

                [NameInMap("VpcInstanceId")]
                [Validation(Required=true)]
                public string VpcInstanceId { get; set; }

                [NameInMap("PrivateZoneConnectionString")]
                [Validation(Required=true)]
                public string PrivateZoneConnectionString { get; set; }

            }

        }

    }

}
