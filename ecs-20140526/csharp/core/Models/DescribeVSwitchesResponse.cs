// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeVSwitchesResponse : TeaModel {
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

        [NameInMap("VSwitches")]
        [Validation(Required=true)]
        public DescribeVSwitchesResponseVSwitches VSwitches { get; set; }
        public class DescribeVSwitchesResponseVSwitches : TeaModel {
            [NameInMap("VSwitch")]
            [Validation(Required=true)]
            public List<DescribeVSwitchesResponseVSwitchesVSwitch> VSwitch { get; set; }
            public class DescribeVSwitchesResponseVSwitchesVSwitch : TeaModel {
                    public string VSwitchId { get; set; }
                    public string VpcId { get; set; }
                    public string Status { get; set; }
                    public string CidrBlock { get; set; }
                    public string ZoneId { get; set; }
                    public long AvailableIpAddressCount { get; set; }
                    public string Description { get; set; }
                    public string VSwitchName { get; set; }
                    public string CreationTime { get; set; }
                    public bool? IsDefault { get; set; }
                    public string ResourceGroupId { get; set; }
            }
        };

    }

}
