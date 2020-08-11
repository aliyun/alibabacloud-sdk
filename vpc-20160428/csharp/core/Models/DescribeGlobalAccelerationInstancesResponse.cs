// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeGlobalAccelerationInstancesResponse : TeaModel {
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

        [NameInMap("GlobalAccelerationInstances")]
        [Validation(Required=true)]
        public DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstances GlobalAccelerationInstances { get; set; }
        public class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstances : TeaModel {
            [NameInMap("GlobalAccelerationInstance")]
            [Validation(Required=true)]
            public List<DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance> GlobalAccelerationInstance { get; set; }
            public class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance : TeaModel {
                    public string RegionId { get; set; }
                    public string GlobalAccelerationInstanceId { get; set; }
                    public string IpAddress { get; set; }
                    public string Status { get; set; }
                    public string Bandwidth { get; set; }
                    public string InternetChargeType { get; set; }
                    public string ChargeType { get; set; }
                    public string BandwidthType { get; set; }
                    public string AccelerationLocation { get; set; }
                    public string ServiceLocation { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string ExpiredTime { get; set; }
                    public string CreationTime { get; set; }
                    public string HasReservationData { get; set; }
                    public string ReservationBandwidth { get; set; }
                    public string ReservationInternetChargeType { get; set; }
                    public string ReservationActiveTime { get; set; }
                    public string ReservationOrderType { get; set; }
                    public DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServers BackendServers { get; set; }
                    public class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServers : TeaModel {
                        [NameInMap("BackendServer")]
                        [Validation(Required=true)]
                        public List<DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServersBackendServer> BackendServer { get; set; }
                        public class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstanceBackendServersBackendServer : TeaModel {
                            [NameInMap("RegionId")]
                            [Validation(Required=true)]
                            public string RegionId { get; set; }

                            [NameInMap("ServerId")]
                            [Validation(Required=true)]
                            public string ServerId { get; set; }

                            [NameInMap("ServerIpAddress")]
                            [Validation(Required=true)]
                            public string ServerIpAddress { get; set; }

                            [NameInMap("ServerType")]
                            [Validation(Required=true)]
                            public string ServerType { get; set; }

                        }

                    }
                    public DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddresses PublicIpAddresses { get; set; }
                    public class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddresses : TeaModel {
                        [NameInMap("PublicIpAddress")]
                        [Validation(Required=true)]
                        public List<DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddressesPublicIpAddress> PublicIpAddress { get; set; }
                        public class DescribeGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstancePublicIpAddressesPublicIpAddress : TeaModel {
                            [NameInMap("AllocationId")]
                            [Validation(Required=true)]
                            public string AllocationId { get; set; }

                            [NameInMap("IpAddress")]
                            [Validation(Required=true)]
                            public string IpAddress { get; set; }

                        }

                    }
            }
        };

    }

}
