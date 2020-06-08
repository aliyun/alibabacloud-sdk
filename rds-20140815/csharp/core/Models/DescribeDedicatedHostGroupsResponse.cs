// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDedicatedHostGroupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DedicatedHostGroups")]
        [Validation(Required=true)]
        public DescribeDedicatedHostGroupsResponseDedicatedHostGroups DedicatedHostGroups { get; set; }
        public class DescribeDedicatedHostGroupsResponseDedicatedHostGroups : TeaModel {
            [NameInMap("DedicatedHostGroups")]
            [Validation(Required=true)]
            public List<DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroups> DedicatedHostGroups { get; set; }
            public class DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroups : TeaModel {
                    public string DedicatedHostGroupId { get; set; }
                    public string DedicatedHostGroupDesc { get; set; }
                    public int? CpuAllocationRatio { get; set; }
                    public int? MemAllocationRatio { get; set; }
                    public int? DiskAllocationRatio { get; set; }
                    public string AllocationPolicy { get; set; }
                    public string HostReplacePolicy { get; set; }
                    public string CreateTime { get; set; }
                    public string VPCId { get; set; }
                    public int? HostNumber { get; set; }
                    public int? InstanceNumber { get; set; }
                    public string Engine { get; set; }
                    public string Text { get; set; }
                    public Dictionary<string, string> DedicatedHostCountGroupByHostType { get; set; }
                    public string BastionInstanceId { get; set; }
                    public string OpenPermission { get; set; }
                    public DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroupsZoneIDList ZoneIDList { get; set; }
                    public class DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroupsZoneIDList : TeaModel {
                        [NameInMap("ZoneIDList")]
                        [Validation(Required=true)]
                        public List<string> ZoneIDList { get; set; }

                    }
            }
        };

    }

}
