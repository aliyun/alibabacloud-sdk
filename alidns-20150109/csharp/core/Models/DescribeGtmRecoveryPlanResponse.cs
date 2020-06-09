// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmRecoveryPlanResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RecoveryPlanId")]
        [Validation(Required=true)]
        public long RecoveryPlanId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Remark")]
        [Validation(Required=true)]
        public string Remark { get; set; }

        [NameInMap("FaultAddrPoolNum")]
        [Validation(Required=true)]
        public int? FaultAddrPoolNum { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("LastExecuteTime")]
        [Validation(Required=true)]
        public string LastExecuteTime { get; set; }

        [NameInMap("LastExecuteTimestamp")]
        [Validation(Required=true)]
        public long LastExecuteTimestamp { get; set; }

        [NameInMap("LastRollbackTime")]
        [Validation(Required=true)]
        public string LastRollbackTime { get; set; }

        [NameInMap("LastRollbackTimestamp")]
        [Validation(Required=true)]
        public long LastRollbackTimestamp { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public string CreateTime { get; set; }

        [NameInMap("CreateTimestamp")]
        [Validation(Required=true)]
        public long CreateTimestamp { get; set; }

        [NameInMap("UpdateTime")]
        [Validation(Required=true)]
        public string UpdateTime { get; set; }

        [NameInMap("UpdateTimestamp")]
        [Validation(Required=true)]
        public long UpdateTimestamp { get; set; }

        [NameInMap("FaultAddrPools")]
        [Validation(Required=true)]
        public DescribeGtmRecoveryPlanResponseFaultAddrPools FaultAddrPools { get; set; }
        public class DescribeGtmRecoveryPlanResponseFaultAddrPools : TeaModel {
            [NameInMap("FaultAddrPool")]
            [Validation(Required=true)]
            public List<DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool> FaultAddrPool { get; set; }
            public class DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool : TeaModel {
                    public string AddrPoolId { get; set; }
                    public string AddrPoolName { get; set; }
                    public string InstanceId { get; set; }
                    public DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs Addrs { get; set; }
                    public class DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs : TeaModel {
                        [NameInMap("Addr")]
                        [Validation(Required=true)]
                        public List<DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr> Addr { get; set; }
                        public class DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr : TeaModel {
                            [NameInMap("Id")]
                            [Validation(Required=true)]
                            public long Id { get; set; }

                            [NameInMap("Mode")]
                            [Validation(Required=true)]
                            public string Mode { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
            }
        };

    }

}
