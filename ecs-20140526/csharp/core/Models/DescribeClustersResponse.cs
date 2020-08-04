// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeClustersResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Clusters")]
        [Validation(Required=true)]
        public DescribeClustersResponseClusters Clusters { get; set; }
        public class DescribeClustersResponseClusters : TeaModel {
            [NameInMap("Cluster")]
            [Validation(Required=true)]
            public List<DescribeClustersResponseClustersCluster> Cluster { get; set; }
            public class DescribeClustersResponseClustersCluster : TeaModel {
                    public string ClusterId { get; set; }
            }
        };

    }

}
