// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDemandsResponse : TeaModel {
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

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Demands")]
        [Validation(Required=true)]
        public DescribeDemandsResponseDemands Demands { get; set; }
        public class DescribeDemandsResponseDemands : TeaModel {
            [NameInMap("Demand")]
            [Validation(Required=true)]
            public List<DescribeDemandsResponseDemandsDemand> Demand { get; set; }
            public class DescribeDemandsResponseDemandsDemand : TeaModel {
                    public string ZoneId { get; set; }
                    public string DemandTime { get; set; }
                    public string InstanceTypeFamily { get; set; }
                    public string DemandId { get; set; }
                    public string DemandName { get; set; }
                    public string Comment { get; set; }
                    public string DemandDescription { get; set; }
                    public string InstanceType { get; set; }
                    public string InstanceChargeType { get; set; }
                    public int? Period { get; set; }
                    public string PeriodUnit { get; set; }
                    public string StartTime { get; set; }
                    public string EndTime { get; set; }
                    public string DemandStatus { get; set; }
                    public int? TotalAmount { get; set; }
                    public int? AvailableAmount { get; set; }
                    public int? UsedAmount { get; set; }
                    public int? DeliveringAmount { get; set; }
                    public DescribeDemandsResponseDemandsDemandSupplyInfos SupplyInfos { get; set; }
                    public class DescribeDemandsResponseDemandsDemandSupplyInfos : TeaModel {
                        [NameInMap("SupplyInfo")]
                        [Validation(Required=true)]
                        public List<DescribeDemandsResponseDemandsDemandSupplyInfosSupplyInfo> SupplyInfo { get; set; }
                        public class DescribeDemandsResponseDemandsDemandSupplyInfosSupplyInfo : TeaModel {
                            [NameInMap("Amount")]
                            [Validation(Required=true)]
                            public int? Amount { get; set; }

                            [NameInMap("SupplyStatus")]
                            [Validation(Required=true)]
                            public string SupplyStatus { get; set; }

                            [NameInMap("SupplyStartTime")]
                            [Validation(Required=true)]
                            public string SupplyStartTime { get; set; }

                            [NameInMap("SupplyEndTime")]
                            [Validation(Required=true)]
                            public string SupplyEndTime { get; set; }

                        }

                    }
            }
        };

    }

}
