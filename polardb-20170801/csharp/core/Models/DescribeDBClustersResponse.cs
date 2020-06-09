// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBClustersResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeDBClustersResponseItems Items { get; set; }
        public class DescribeDBClustersResponseItems : TeaModel {
            [NameInMap("DBCluster")]
            [Validation(Required=true)]
            public List<DescribeDBClustersResponseItemsDBCluster> DBCluster { get; set; }
            public class DescribeDBClustersResponseItemsDBCluster : TeaModel {
                    public string DBClusterId { get; set; }
                    public string DBClusterDescription { get; set; }
                    public string PayType { get; set; }
                    public string DBClusterNetworkType { get; set; }
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
                    public string ExpireTime { get; set; }
                    public string Expired { get; set; }
                    public string DBClusterStatus { get; set; }
                    public string Engine { get; set; }
                    public string DBType { get; set; }
                    public string DBVersion { get; set; }
                    public string LockMode { get; set; }
                    public int? DeletionLock { get; set; }
                    public string CreateTime { get; set; }
                    public string VpcId { get; set; }
                    public int? DBNodeNumber { get; set; }
                    public string DBNodeClass { get; set; }
                    public long StorageUsed { get; set; }
                    public string ResourceGroupId { get; set; }
                    public DescribeDBClustersResponseItemsDBClusterDBNodes DBNodes { get; set; }
                    public class DescribeDBClustersResponseItemsDBClusterDBNodes : TeaModel {
                        [NameInMap("DBNode")]
                        [Validation(Required=true)]
                        public List<DescribeDBClustersResponseItemsDBClusterDBNodesDBNode> DBNode { get; set; }
                        public class DescribeDBClustersResponseItemsDBClusterDBNodesDBNode : TeaModel {
                            [NameInMap("DBNodeId")]
                            [Validation(Required=true)]
                            public string DBNodeId { get; set; }

                            [NameInMap("DBNodeClass")]
                            [Validation(Required=true)]
                            public string DBNodeClass { get; set; }

                            [NameInMap("DBNodeRole")]
                            [Validation(Required=true)]
                            public string DBNodeRole { get; set; }

                            [NameInMap("RegionId")]
                            [Validation(Required=true)]
                            public string RegionId { get; set; }

                            [NameInMap("ZoneId")]
                            [Validation(Required=true)]
                            public string ZoneId { get; set; }

                        }

                    }
                    public DescribeDBClustersResponseItemsDBClusterTags Tags { get; set; }
                    public class DescribeDBClustersResponseItemsDBClusterTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeDBClustersResponseItemsDBClusterTagsTag> Tag { get; set; }
                        public class DescribeDBClustersResponseItemsDBClusterTagsTag : TeaModel {
                            [NameInMap("Key")]
                            [Validation(Required=true)]
                            public string Key { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
            }
        };

    }

}
