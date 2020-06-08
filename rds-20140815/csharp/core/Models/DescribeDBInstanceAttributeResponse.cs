// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstanceAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeDBInstanceAttributeResponseItems Items { get; set; }
        public class DescribeDBInstanceAttributeResponseItems : TeaModel {
            [NameInMap("DBInstanceAttribute")]
            [Validation(Required=true)]
            public List<DescribeDBInstanceAttributeResponseItemsDBInstanceAttribute> DBInstanceAttribute { get; set; }
            public class DescribeDBInstanceAttributeResponseItemsDBInstanceAttribute : TeaModel {
                    public string IPType { get; set; }
                    public string DBInstanceDiskUsed { get; set; }
                    public string GuardDBInstanceName { get; set; }
                    public bool? CanTempUpgrade { get; set; }
                    public string TempUpgradeTimeStart { get; set; }
                    public string TempUpgradeTimeEnd { get; set; }
                    public string TempUpgradeRecoveryTime { get; set; }
                    public string TempUpgradeRecoveryClass { get; set; }
                    public int? TempUpgradeRecoveryCpu { get; set; }
                    public int? TempUpgradeRecoveryMemory { get; set; }
                    public string TempUpgradeRecoveryMaxIOPS { get; set; }
                    public string TempUpgradeRecoveryMaxConnections { get; set; }
                    public int? InsId { get; set; }
                    public string DBInstanceId { get; set; }
                    public string PayType { get; set; }
                    public string DBInstanceClassType { get; set; }
                    public string DBInstanceType { get; set; }
                    public string RegionId { get; set; }
                    public string ConnectionString { get; set; }
                    public string Port { get; set; }
                    public string Engine { get; set; }
                    public string EngineVersion { get; set; }
                    public string DBInstanceClass { get; set; }
                    public long DBInstanceMemory { get; set; }
                    public int? DBInstanceStorage { get; set; }
                    public string VpcCloudInstanceId { get; set; }
                    public string DBInstanceNetType { get; set; }
                    public string DBInstanceStatus { get; set; }
                    public string DBInstanceDescription { get; set; }
                    public string LockMode { get; set; }
                    public string LockReason { get; set; }
                    public string ReadDelayTime { get; set; }
                    public int? DBMaxQuantity { get; set; }
                    public int? AccountMaxQuantity { get; set; }
                    public string CreationTime { get; set; }
                    public string ExpireTime { get; set; }
                    public string MaintainTime { get; set; }
                    public string AvailabilityValue { get; set; }
                    public int? MaxIOPS { get; set; }
                    public int? MaxConnections { get; set; }
                    public string MasterInstanceId { get; set; }
                    public string DBInstanceCPU { get; set; }
                    public string IncrementSourceDBInstanceId { get; set; }
                    public string GuardDBInstanceId { get; set; }
                    public string ReplicateId { get; set; }
                    public string TempDBInstanceId { get; set; }
                    public string SecurityIPList { get; set; }
                    public string ZoneId { get; set; }
                    public string InstanceNetworkType { get; set; }
                    public string DBInstanceStorageType { get; set; }
                    public string AdvancedFeatures { get; set; }
                    public string Category { get; set; }
                    public string AccountType { get; set; }
                    public string SupportUpgradeAccountType { get; set; }
                    public string SupportCreateSuperAccount { get; set; }
                    public string VpcId { get; set; }
                    public string VSwitchId { get; set; }
                    public string ConnectionMode { get; set; }
                    public string CurrentKernelVersion { get; set; }
                    public string LatestKernelVersion { get; set; }
                    public string ResourceGroupId { get; set; }
                    public string ReadonlyInstanceSQLDelayedTime { get; set; }
                    public string SecurityIPMode { get; set; }
                    public string TimeZone { get; set; }
                    public string Collation { get; set; }
                    public string DispenseMode { get; set; }
                    public string MasterZone { get; set; }
                    public string AutoUpgradeMinorVersion { get; set; }
                    public int? ProxyType { get; set; }
                    public string ConsoleVersion { get; set; }
                    public bool? MultipleTempUpgrade { get; set; }
                    public string OriginConfiguration { get; set; }
                    public string DedicatedHostGroupId { get; set; }
                    public string SuperPermissionMode { get; set; }
                    public DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZones SlaveZones { get; set; }
                    public class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZones : TeaModel {
                        [NameInMap("SlaveZone")]
                        [Validation(Required=true)]
                        public List<DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZonesSlaveZone> SlaveZone { get; set; }
                        public class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZonesSlaveZone : TeaModel {
                            [NameInMap("ZoneId")]
                            [Validation(Required=true)]
                            public string ZoneId { get; set; }

                        }

                    }
                    public DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIds ReadOnlyDBInstanceIds { get; set; }
                    public class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIds : TeaModel {
                        [NameInMap("ReadOnlyDBInstanceId")]
                        [Validation(Required=true)]
                        public List<DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIdsReadOnlyDBInstanceId> ReadOnlyDBInstanceId { get; set; }
                        public class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIdsReadOnlyDBInstanceId : TeaModel {
                            [NameInMap("DBInstanceId")]
                            [Validation(Required=true)]
                            public string DBInstanceId { get; set; }

                        }

                    }
                    public DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtra Extra { get; set; }
                    public class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtra : TeaModel {
                        [NameInMap("ReplicaGroupID")]
                        [Validation(Required=true)]
                        public string ReplicaGroupID { get; set; }

                        [NameInMap("ReplicaGroupStatus")]
                        [Validation(Required=true)]
                        public string ReplicaGroupStatus { get; set; }

                        [NameInMap("ActiveReplicaDBInstanceID")]
                        [Validation(Required=true)]
                        public string ActiveReplicaDBInstanceID { get; set; }

                        [NameInMap("DBInstanceId")]
                        [Validation(Required=true)]
                        public DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtraDBInstanceId DBInstanceId { get; set; }
                        public class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtraDBInstanceId : TeaModel {
                            [NameInMap("DBInstanceId")]
                            [Validation(Required=true)]
                            public List<string> DBInstanceId { get; set; }
                        };

                    }
            }
        };

    }

}
