// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBClusterAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("DBClusterNetworkType")]
        [Validation(Required=true)]
        public string DBClusterNetworkType { get; set; }

        [NameInMap("VPCId")]
        [Validation(Required=true)]
        public string VPCId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=true)]
        public string VSwitchId { get; set; }

        [NameInMap("PayType")]
        [Validation(Required=true)]
        public string PayType { get; set; }

        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("DBClusterStatus")]
        [Validation(Required=true)]
        public string DBClusterStatus { get; set; }

        [NameInMap("DBClusterDescription")]
        [Validation(Required=true)]
        public string DBClusterDescription { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("DBType")]
        [Validation(Required=true)]
        public string DBType { get; set; }

        [NameInMap("DBVersion")]
        [Validation(Required=true)]
        public string DBVersion { get; set; }

        [NameInMap("LockMode")]
        [Validation(Required=true)]
        public string LockMode { get; set; }

        [NameInMap("DeletionLock")]
        [Validation(Required=true)]
        public int? DeletionLock { get; set; }

        [NameInMap("CreationTime")]
        [Validation(Required=true)]
        public string CreationTime { get; set; }

        [NameInMap("ExpireTime")]
        [Validation(Required=true)]
        public string ExpireTime { get; set; }

        [NameInMap("Expired")]
        [Validation(Required=true)]
        public string Expired { get; set; }

        [NameInMap("MaintainTime")]
        [Validation(Required=true)]
        public string MaintainTime { get; set; }

        [NameInMap("StorageUsed")]
        [Validation(Required=true)]
        public long StorageUsed { get; set; }

        [NameInMap("StorageMax")]
        [Validation(Required=true)]
        public long StorageMax { get; set; }

        [NameInMap("ZoneIds")]
        [Validation(Required=true)]
        public string ZoneIds { get; set; }

        [NameInMap("SQLSize")]
        [Validation(Required=true)]
        public long SQLSize { get; set; }

        [NameInMap("IsLatestVersion")]
        [Validation(Required=true)]
        public bool? IsLatestVersion { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

        [NameInMap("DataLevel1BackupChainSize")]
        [Validation(Required=true)]
        public long DataLevel1BackupChainSize { get; set; }

        [NameInMap("Tags")]
        [Validation(Required=true)]
        public List<DescribeDBClusterAttributeResponseTags> Tags { get; set; }
        public class DescribeDBClusterAttributeResponseTags : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("DBNodes")]
        [Validation(Required=true)]
        public List<DescribeDBClusterAttributeResponseDBNodes> DBNodes { get; set; }
        public class DescribeDBClusterAttributeResponseDBNodes : TeaModel {
            [NameInMap("DBNodeId")]
            [Validation(Required=true)]
            public string DBNodeId { get; set; }

            [NameInMap("ZoneId")]
            [Validation(Required=true)]
            public string ZoneId { get; set; }

            [NameInMap("DBNodeStatus")]
            [Validation(Required=true)]
            public string DBNodeStatus { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("DBNodeClass")]
            [Validation(Required=true)]
            public string DBNodeClass { get; set; }

            [NameInMap("DBNodeRole")]
            [Validation(Required=true)]
            public string DBNodeRole { get; set; }

            [NameInMap("MaxIOPS")]
            [Validation(Required=true)]
            public int? MaxIOPS { get; set; }

            [NameInMap("MaxConnections")]
            [Validation(Required=true)]
            public int? MaxConnections { get; set; }

            [NameInMap("FailoverPriority")]
            [Validation(Required=true)]
            public int? FailoverPriority { get; set; }

        }

    }

}
