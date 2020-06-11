// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class DescribeServiceMeshesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ServiceMeshes")]
        [Validation(Required=true)]
        public List<DescribeServiceMeshesResponseServiceMeshes> ServiceMeshes { get; set; }
        public class DescribeServiceMeshesResponseServiceMeshes : TeaModel {
            [NameInMap("Endpoints")]
            [Validation(Required=true)]
            public DescribeServiceMeshesResponseServiceMeshesEndpoints Endpoints { get; set; }
            public class DescribeServiceMeshesResponseServiceMeshesEndpoints : TeaModel {
                [NameInMap("IntranetApiServerEndpoint")]
                [Validation(Required=true)]
                public string IntranetApiServerEndpoint { get; set; }
                [NameInMap("IntranetPilotEndpoint")]
                [Validation(Required=true)]
                public string IntranetPilotEndpoint { get; set; }
                [NameInMap("PublicApiServerEndpoint")]
                [Validation(Required=true)]
                public string PublicApiServerEndpoint { get; set; }
                [NameInMap("PublicPilotEndpoint")]
                [Validation(Required=true)]
                public string PublicPilotEndpoint { get; set; }
                [NameInMap("ReverseTunnelEndpoint")]
                [Validation(Required=true)]
                public string ReverseTunnelEndpoint { get; set; }
            };

            [NameInMap("ServiceMeshInfo")]
            [Validation(Required=true)]
            public DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo ServiceMeshInfo { get; set; }
            public class DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo : TeaModel {
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
                [NameInMap("ServiceMeshId")]
                [Validation(Required=true)]
                public string ServiceMeshId { get; set; }
                [NameInMap("State")]
                [Validation(Required=true)]
                public string State { get; set; }
                [NameInMap("UpdateTime")]
                [Validation(Required=true)]
                public string UpdateTime { get; set; }
                [NameInMap("Version")]
                [Validation(Required=true)]
                public string Version { get; set; }
            };

            [NameInMap("Spec")]
            [Validation(Required=true)]
            public DescribeServiceMeshesResponseServiceMeshesSpec Spec { get; set; }
            public class DescribeServiceMeshesResponseServiceMeshesSpec : TeaModel {
                [NameInMap("LoadBalancer")]
                [Validation(Required=true)]
                public DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer LoadBalancer { get; set; }
                public class DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer : TeaModel {
                    [NameInMap("ApiServerLoadbalancerId")]
                    [Validation(Required=true)]
                    public string ApiServerLoadbalancerId { get; set; }

                    [NameInMap("ApiServerPublicEip")]
                    [Validation(Required=true)]
                    public string ApiServerPublicEip { get; set; }

                    [NameInMap("PilotPublicEip")]
                    [Validation(Required=true)]
                    public string PilotPublicEip { get; set; }

                    [NameInMap("PilotPublicLoadbalancerId")]
                    [Validation(Required=true)]
                    public string PilotPublicLoadbalancerId { get; set; }

                }
                [NameInMap("MeshConfig")]
                [Validation(Required=true)]
                public DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig MeshConfig { get; set; }
                public class DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig : TeaModel {
                    [NameInMap("Mtls")]
                    [Validation(Required=true)]
                    public bool? Mtls { get; set; }

                    [NameInMap("OutboundTrafficPolicy")]
                    [Validation(Required=true)]
                    public string OutboundTrafficPolicy { get; set; }

                    [NameInMap("StrictMtls")]
                    [Validation(Required=true)]
                    public bool? StrictMtls { get; set; }

                    [NameInMap("Tracing")]
                    [Validation(Required=true)]
                    public bool? Tracing { get; set; }

                    [NameInMap("Telemetry")]
                    [Validation(Required=true)]
                    public bool? Telemetry { get; set; }

                }
                [NameInMap("Network")]
                [Validation(Required=true)]
                public DescribeServiceMeshesResponseServiceMeshesSpecNetwork Network { get; set; }
                public class DescribeServiceMeshesResponseServiceMeshesSpecNetwork : TeaModel {
                    [NameInMap("SecurityGroupId")]
                    [Validation(Required=true)]
                    public string SecurityGroupId { get; set; }

                    [NameInMap("VpcId")]
                    [Validation(Required=true)]
                    public string VpcId { get; set; }

                    [NameInMap("VSwitches")]
                    [Validation(Required=true)]
                    public List<string> VSwitches { get; set; }

                }
            };

            [NameInMap("Clusters")]
            [Validation(Required=true)]
            public List<string> Clusters { get; set; }

        }

    }

}
