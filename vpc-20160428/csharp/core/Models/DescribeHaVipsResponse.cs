// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeHaVipsResponse : TeaModel {
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

        [NameInMap("HaVips")]
        [Validation(Required=true)]
        public DescribeHaVipsResponseHaVips HaVips { get; set; }
        public class DescribeHaVipsResponseHaVips : TeaModel {
            [NameInMap("HaVip")]
            [Validation(Required=true)]
            public List<DescribeHaVipsResponseHaVipsHaVip> HaVip { get; set; }
            public class DescribeHaVipsResponseHaVipsHaVip : TeaModel {
                    public string HaVipId { get; set; }
                    public string RegionId { get; set; }
                    public string VpcId { get; set; }
                    public string VSwitchId { get; set; }
                    public string IpAddress { get; set; }
                    public string Status { get; set; }
                    public string MasterInstanceId { get; set; }
                    public string Description { get; set; }
                    public string Name { get; set; }
                    public string ChargeType { get; set; }
                    public string CreateTime { get; set; }
                    public DescribeHaVipsResponseHaVipsHaVipAssociatedInstances AssociatedInstances { get; set; }
                    public class DescribeHaVipsResponseHaVipsHaVipAssociatedInstances : TeaModel {
                        [NameInMap("associatedInstance")]
                        [Validation(Required=true)]
                        public List<string> AssociatedInstance { get; set; }

                    }
                    public DescribeHaVipsResponseHaVipsHaVipAssociatedEipAddresses AssociatedEipAddresses { get; set; }
                    public class DescribeHaVipsResponseHaVipsHaVipAssociatedEipAddresses : TeaModel {
                        [NameInMap("associatedEipAddresse")]
                        [Validation(Required=true)]
                        public List<string> AssociatedEipAddresse { get; set; }

                    }
            }
        };

    }

}
