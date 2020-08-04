// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyReservedInstancesRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ReservedInstanceId")]
        [Validation(Required=true)]
        public List<string> ReservedInstanceId { get; set; }

        [NameInMap("Configuration")]
        [Validation(Required=false)]
        public List<ModifyReservedInstancesRequestConfiguration> Configuration { get; set; }
        public class ModifyReservedInstancesRequestConfiguration : TeaModel {
            [NameInMap("ZoneId")]
            [Validation(Required=true)]
            public string ZoneId { get; set; }

            [NameInMap("ReservedInstanceName")]
            [Validation(Required=true)]
            public string ReservedInstanceName { get; set; }

            [NameInMap("InstanceType")]
            [Validation(Required=true)]
            public string InstanceType { get; set; }

            [NameInMap("Scope")]
            [Validation(Required=true)]
            public string Scope { get; set; }

            [NameInMap("InstanceAmount")]
            [Validation(Required=true)]
            public int? InstanceAmount { get; set; }

        }

    }

}
