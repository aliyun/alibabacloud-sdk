// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBClusterMigrationResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("SourceRDSDBInstanceId")]
        [Validation(Required=true)]
        public string SourceRDSDBInstanceId { get; set; }

        [NameInMap("MigrationStatus")]
        [Validation(Required=true)]
        public string MigrationStatus { get; set; }

        [NameInMap("Topologies")]
        [Validation(Required=true)]
        public string Topologies { get; set; }

        [NameInMap("DelayedSeconds")]
        [Validation(Required=true)]
        public int? DelayedSeconds { get; set; }

        [NameInMap("ExpiredTime")]
        [Validation(Required=true)]
        public string ExpiredTime { get; set; }

        [NameInMap("RdsReadWriteMode")]
        [Validation(Required=true)]
        public string RdsReadWriteMode { get; set; }

        [NameInMap("DBClusterReadWriteMode")]
        [Validation(Required=true)]
        public string DBClusterReadWriteMode { get; set; }

        [NameInMap("Comment")]
        [Validation(Required=true)]
        public string Comment { get; set; }

        [NameInMap("DBClusterEndpointList")]
        [Validation(Required=true)]
        public List<DescribeDBClusterMigrationResponseDBClusterEndpointList> DBClusterEndpointList { get; set; }
        public class DescribeDBClusterMigrationResponseDBClusterEndpointList : TeaModel {
            [NameInMap("DBEndpointId")]
            [Validation(Required=true)]
            public string DBEndpointId { get; set; }

            [NameInMap("EndpointType")]
            [Validation(Required=true)]
            public string EndpointType { get; set; }

            [NameInMap("AddressItems")]
            [Validation(Required=true)]
            public List<DescribeDBClusterMigrationResponseDBClusterEndpointListAddressItems> AddressItems { get; set; }
            public class DescribeDBClusterMigrationResponseDBClusterEndpointListAddressItems : TeaModel {
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

            }

        }

        [NameInMap("RdsEndpointList")]
        [Validation(Required=true)]
        public List<DescribeDBClusterMigrationResponseRdsEndpointList> RdsEndpointList { get; set; }
        public class DescribeDBClusterMigrationResponseRdsEndpointList : TeaModel {
            [NameInMap("DBEndpointId")]
            [Validation(Required=true)]
            public string DBEndpointId { get; set; }

            [NameInMap("EndpointType")]
            [Validation(Required=true)]
            public string EndpointType { get; set; }

            [NameInMap("AddressItems")]
            [Validation(Required=true)]
            public List<DescribeDBClusterMigrationResponseRdsEndpointListAddressItems> AddressItems { get; set; }
            public class DescribeDBClusterMigrationResponseRdsEndpointListAddressItems : TeaModel {
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

            }

        }

    }

}
