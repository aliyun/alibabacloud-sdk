// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeHpcClustersResponse : TeaModel {
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

        [NameInMap("HpcClusters")]
        [Validation(Required=true)]
        public DescribeHpcClustersResponseHpcClusters HpcClusters { get; set; }
        public class DescribeHpcClustersResponseHpcClusters : TeaModel {
            [NameInMap("HpcCluster")]
            [Validation(Required=true)]
            public List<DescribeHpcClustersResponseHpcClustersHpcCluster> HpcCluster { get; set; }
            public class DescribeHpcClustersResponseHpcClustersHpcCluster : TeaModel {
                    public string HpcClusterId { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
            }
        };

    }

}
