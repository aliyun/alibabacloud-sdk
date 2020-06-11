// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class DescribeClustersInServiceMeshResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Clusters")]
        [Validation(Required=true)]
        public List<DescribeClustersInServiceMeshResponseClusters> Clusters { get; set; }
        public class DescribeClustersInServiceMeshResponseClusters : TeaModel {
            [NameInMap("ClusterId")]
            [Validation(Required=true)]
            public string ClusterId { get; set; }

            [NameInMap("ClusterType")]
            [Validation(Required=true)]
            public string ClusterType { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("ErrorMessage")]
            [Validation(Required=true)]
            public string ErrorMessage { get; set; }

            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }

            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("State")]
            [Validation(Required=true)]
            public string State { get; set; }

            [NameInMap("UpdateTime")]
            [Validation(Required=true)]
            public string UpdateTime { get; set; }

            [NameInMap("Version")]
            [Validation(Required=true)]
            public string Version { get; set; }

            [NameInMap("VpcId")]
            [Validation(Required=true)]
            public string VpcId { get; set; }

            [NameInMap("SgId")]
            [Validation(Required=true)]
            public string SgId { get; set; }

            [NameInMap("ClusterDomain")]
            [Validation(Required=true)]
            public string ClusterDomain { get; set; }

        }

    }

}
