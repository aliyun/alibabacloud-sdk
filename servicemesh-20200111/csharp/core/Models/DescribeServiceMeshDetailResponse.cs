// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class DescribeServiceMeshDetailResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ServiceMesh")]
        [Validation(Required=true)]
        public DescribeServiceMeshDetailResponseServiceMesh ServiceMesh { get; set; }
        public class DescribeServiceMeshDetailResponseServiceMesh : TeaModel {
            [NameInMap("Endpoints")]
            [Validation(Required=true)]
            public DescribeServiceMeshDetailResponseServiceMeshEndpoints Endpoints { get; set; }
            public class DescribeServiceMeshDetailResponseServiceMeshEndpoints : TeaModel {
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

            }
            [NameInMap("ServiceMeshInfo")]
            [Validation(Required=true)]
            public DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo ServiceMeshInfo { get; set; }
            public class DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo : TeaModel {
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

            }
            [NameInMap("Spec")]
            [Validation(Required=true)]
            public DescribeServiceMeshDetailResponseServiceMeshSpec Spec { get; set; }
            public class DescribeServiceMeshDetailResponseServiceMeshSpec : TeaModel {
                [NameInMap("LoadBalancer")]
                [Validation(Required=true)]
                public DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer LoadBalancer { get; set; }
                public class DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer : TeaModel {
                    [NameInMap("ApiServerLoadbalancerId")]
                    [Validation(Required=true)]
                    public string ApiServerLoadbalancerId { get; set; }
                    [NameInMap("ApiServerPublicEip")]
                    [Validation(Required=true)]
                    public bool? ApiServerPublicEip { get; set; }
                    [NameInMap("PilotPublicEip")]
                    [Validation(Required=true)]
                    public bool? PilotPublicEip { get; set; }
                    [NameInMap("PilotPublicLoadbalancerId")]
                    [Validation(Required=true)]
                    public string PilotPublicLoadbalancerId { get; set; }
                };

                [NameInMap("MeshConfig")]
                [Validation(Required=true)]
                public DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig MeshConfig { get; set; }
                public class DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig : TeaModel {
                    [NameInMap("EnableLocalityLB")]
                    [Validation(Required=true)]
                    public bool? EnableLocalityLB { get; set; }
                    [NameInMap("Telemetry")]
                    [Validation(Required=true)]
                    public bool? Telemetry { get; set; }
                    [NameInMap("Tracing")]
                    [Validation(Required=true)]
                    public bool? Tracing { get; set; }
                    [NameInMap("Pilot")]
                    [Validation(Required=true)]
                    public DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot Pilot { get; set; }
                    public class DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot : TeaModel {
                        [NameInMap("TraceSampling")]
                        [Validation(Required=true)]
                        public float? TraceSampling { get; set; }

                    }
                    [NameInMap("OPA")]
                    [Validation(Required=true)]
                    public DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA OPA { get; set; }
                    public class DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA : TeaModel {
                        [NameInMap("Enabled")]
                        [Validation(Required=true)]
                        public bool? Enabled { get; set; }

                        [NameInMap("LogLevel")]
                        [Validation(Required=true)]
                        public string LogLevel { get; set; }

                        [NameInMap("RequestCPU")]
                        [Validation(Required=true)]
                        public string RequestCPU { get; set; }

                        [NameInMap("RequestMemory")]
                        [Validation(Required=true)]
                        public string RequestMemory { get; set; }

                        [NameInMap("LimitCPU")]
                        [Validation(Required=true)]
                        public string LimitCPU { get; set; }

                        [NameInMap("LimitMemory")]
                        [Validation(Required=true)]
                        public string LimitMemory { get; set; }

                    }
                    [NameInMap("Audit")]
                    [Validation(Required=true)]
                    public DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit Audit { get; set; }
                    public class DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit : TeaModel {
                        [NameInMap("Enabled")]
                        [Validation(Required=true)]
                        public bool? Enabled { get; set; }

                        [NameInMap("Project")]
                        [Validation(Required=true)]
                        public string Project { get; set; }

                    }
                };

                [NameInMap("Network")]
                [Validation(Required=true)]
                public DescribeServiceMeshDetailResponseServiceMeshSpecNetwork Network { get; set; }
                public class DescribeServiceMeshDetailResponseServiceMeshSpecNetwork : TeaModel {
                    [NameInMap("SecurityGroupId")]
                    [Validation(Required=true)]
                    public string SecurityGroupId { get; set; }
                    [NameInMap("VpcId")]
                    [Validation(Required=true)]
                    public string VpcId { get; set; }
                    [NameInMap("VSwitches")]
                    [Validation(Required=true)]
                    public List<string> VSwitches { get; set; }
                };

            }
            [NameInMap("Clusters")]
            [Validation(Required=true)]
            public List<string> Clusters { get; set; }
        };

    }

}
