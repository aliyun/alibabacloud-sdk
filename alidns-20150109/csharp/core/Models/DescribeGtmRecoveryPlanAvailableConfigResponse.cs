// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmRecoveryPlanAvailableConfigResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Instances")]
        [Validation(Required=true)]
        public DescribeGtmRecoveryPlanAvailableConfigResponseInstances Instances { get; set; }
        public class DescribeGtmRecoveryPlanAvailableConfigResponseInstances : TeaModel {
            [NameInMap("Instance")]
            [Validation(Required=true)]
            public List<DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance> Instance { get; set; }
            public class DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance : TeaModel {
                    public string InstanceId { get; set; }
                    public string InstanceName { get; set; }
                    public DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools AddrPools { get; set; }
                    public class DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools : TeaModel {
                        [NameInMap("AddrPool")]
                        [Validation(Required=true)]
                        public List<DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool> AddrPool { get; set; }
                        public class DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool : TeaModel {
                            [NameInMap("AddrPoolId")]
                            [Validation(Required=true)]
                            public string AddrPoolId { get; set; }

                            [NameInMap("Name")]
                            [Validation(Required=true)]
                            public string Name { get; set; }

                        }

                    }
            }
        };

    }

}
