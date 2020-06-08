// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstanceNetInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("InstanceNetworkType")]
        [Validation(Required=true)]
        public string InstanceNetworkType { get; set; }

        [NameInMap("SecurityIPMode")]
        [Validation(Required=true)]
        public string SecurityIPMode { get; set; }

        [NameInMap("DBInstanceNetInfos")]
        [Validation(Required=true)]
        public DescribeDBInstanceNetInfoResponseDBInstanceNetInfos DBInstanceNetInfos { get; set; }
        public class DescribeDBInstanceNetInfoResponseDBInstanceNetInfos : TeaModel {
            [NameInMap("DBInstanceNetInfo")]
            [Validation(Required=true)]
            public List<DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfo> DBInstanceNetInfo { get; set; }
            public class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfo : TeaModel {
                    public string Upgradeable { get; set; }
                    public string ExpiredTime { get; set; }
                    public string ConnectionString { get; set; }
                    public string IPAddress { get; set; }
                    public string IPType { get; set; }
                    public string Port { get; set; }
                    public string VPCId { get; set; }
                    public string VSwitchId { get; set; }
                    public string ConnectionStringType { get; set; }
                    public string MaxDelayTime { get; set; }
                    public string DistributionType { get; set; }
                    public DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroups SecurityIPGroups { get; set; }
                    public class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroups : TeaModel {
                        [NameInMap("securityIPGroup")]
                        [Validation(Required=true)]
                        public List<DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroupsSecurityIPGroup> SecurityIPGroup { get; set; }
                        public class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroupsSecurityIPGroup : TeaModel {
                            [NameInMap("SecurityIPGroupName")]
                            [Validation(Required=true)]
                            public string SecurityIPGroupName { get; set; }

                            [NameInMap("SecurityIPs")]
                            [Validation(Required=true)]
                            public string SecurityIPs { get; set; }

                        }

                    }
                    public DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeights DBInstanceWeights { get; set; }
                    public class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeights : TeaModel {
                        [NameInMap("DBInstanceWeight")]
                        [Validation(Required=true)]
                        public List<DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeightsDBInstanceWeight> DBInstanceWeight { get; set; }
                        public class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeightsDBInstanceWeight : TeaModel {
                            [NameInMap("DBInstanceId")]
                            [Validation(Required=true)]
                            public string DBInstanceId { get; set; }

                            [NameInMap("DBInstanceType")]
                            [Validation(Required=true)]
                            public string DBInstanceType { get; set; }

                            [NameInMap("Availability")]
                            [Validation(Required=true)]
                            public string Availability { get; set; }

                            [NameInMap("Weight")]
                            [Validation(Required=true)]
                            public string Weight { get; set; }

                        }

                    }
            }
        };

    }

}
