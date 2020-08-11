// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
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
                    public string Ipv6CidrBlock { get; set; }
                    public string ZoneId { get; set; }
                    public long AvailableIpAddressCount { get; set; }
                    public string Description { get; set; }
                    public string VSwitchName { get; set; }
                    public string CreationTime { get; set; }
                    public bool? IsDefault { get; set; }
                    public string ResourceGroupId { get; set; }
                    public string NetworkAclId { get; set; }
                    public long OwnerId { get; set; }
                    public string ShareType { get; set; }
                    public DescribeVSwitchesResponseVSwitchesVSwitchTags Tags { get; set; }
                    public class DescribeVSwitchesResponseVSwitchesVSwitchTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeVSwitchesResponseVSwitchesVSwitchTagsTag> Tag { get; set; }
                        public class DescribeVSwitchesResponseVSwitchesVSwitchTagsTag : TeaModel {
                            [NameInMap("Key")]
                            [Validation(Required=true)]
                            public string Key { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
                    public DescribeVSwitchesResponseVSwitchesVSwitchRouteTable RouteTable { get; set; }
                    public class DescribeVSwitchesResponseVSwitchesVSwitchRouteTable : TeaModel {
                        [NameInMap("RouteTableId")]
                        [Validation(Required=true)]
                        public string RouteTableId { get; set; }

                        [NameInMap("RouteTableType")]
                        [Validation(Required=true)]
                        public string RouteTableType { get; set; }

                    }
            }
        };

    }

}
