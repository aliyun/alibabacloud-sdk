// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class AllocateDedicatedHostsRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<AllocateDedicatedHostsRequestTag> Tag { get; set; }
        public class AllocateDedicatedHostsRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=false)]
        public string ResourceGroupId { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=false)]
        public string ZoneId { get; set; }

        [NameInMap("DedicatedHostName")]
        [Validation(Required=false)]
        public string DedicatedHostName { get; set; }

        [NameInMap("DedicatedHostType")]
        [Validation(Required=true)]
        public string DedicatedHostType { get; set; }

        [NameInMap("ActionOnMaintenance")]
        [Validation(Required=false)]
        public string ActionOnMaintenance { get; set; }

        [NameInMap("NetworkAttributes")]
        [Validation(Required=true)]
        public AllocateDedicatedHostsRequestNetworkAttributes NetworkAttributes { get; set; }
        public class AllocateDedicatedHostsRequestNetworkAttributes : TeaModel {
            [NameInMap("SlbUdpTimeout")]
            [Validation(Required=false)]
            public int? SlbUdpTimeout { get; set; }
            [NameInMap("UdpTimeout")]
            [Validation(Required=false)]
            public int? UdpTimeout { get; set; }
        };

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("AutoPlacement")]
        [Validation(Required=false)]
        public string AutoPlacement { get; set; }

        [NameInMap("ChargeType")]
        [Validation(Required=false)]
        public string ChargeType { get; set; }

        [NameInMap("Quantity")]
        [Validation(Required=false)]
        public int? Quantity { get; set; }

        [NameInMap("Period")]
        [Validation(Required=false)]
        public int? Period { get; set; }

        [NameInMap("PeriodUnit")]
        [Validation(Required=false)]
        public string PeriodUnit { get; set; }

        [NameInMap("AutoRenew")]
        [Validation(Required=false)]
        public bool? AutoRenew { get; set; }

        [NameInMap("AutoRenewPeriod")]
        [Validation(Required=false)]
        public int? AutoRenewPeriod { get; set; }

        [NameInMap("AutoReleaseTime")]
        [Validation(Required=false)]
        public string AutoReleaseTime { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
