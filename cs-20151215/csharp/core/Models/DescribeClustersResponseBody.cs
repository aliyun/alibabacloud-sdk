// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeClustersResponseBody : TeaModel {
        [NameInMap("name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("cluster_id")]
        [Validation(Required=true)]
        public string ClusterId { get; set; }

        [NameInMap("size")]
        [Validation(Required=true)]
        public int? Size { get; set; }

        [NameInMap("region_id")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("state")]
        [Validation(Required=true)]
        public string State { get; set; }

        [NameInMap("cluster_type")]
        [Validation(Required=true)]
        public string ClusterType { get; set; }

        [NameInMap("created")]
        [Validation(Required=true)]
        public string Created { get; set; }

        [NameInMap("updated")]
        [Validation(Required=true)]
        public string Updated { get; set; }

        [NameInMap("init_version")]
        [Validation(Required=true)]
        public string InitVersion { get; set; }

        [NameInMap("current_version")]
        [Validation(Required=true)]
        public string CurrentVersion { get; set; }

        [NameInMap("meta_data")]
        [Validation(Required=true)]
        public string MetaData { get; set; }

        [NameInMap("resource_group_id")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

        [NameInMap("instance_type")]
        [Validation(Required=true)]
        public string InstanceType { get; set; }

        [NameInMap("vpc_id")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("vswitch_id")]
        [Validation(Required=true)]
        public string VswitchId { get; set; }

        [NameInMap("vswitch_cidr")]
        [Validation(Required=true)]
        public string VswitchCidr { get; set; }

        [NameInMap("data_disk_size")]
        [Validation(Required=true)]
        public int? DataDiskSize { get; set; }

        [NameInMap("data_disk_category")]
        [Validation(Required=true)]
        public string DataDiskCategory { get; set; }

        [NameInMap("security_group_id")]
        [Validation(Required=true)]
        public string SecurityGroupId { get; set; }

        [NameInMap("zone_id")]
        [Validation(Required=true)]
        public string ZoneId { get; set; }

        [NameInMap("network_mode")]
        [Validation(Required=true)]
        public string NetworkMode { get; set; }

        [NameInMap("subnet_cidr")]
        [Validation(Required=true)]
        public string SubnetCidr { get; set; }

        [NameInMap("master_url")]
        [Validation(Required=true)]
        public string MasterUrl { get; set; }

        [NameInMap("external_loadbalancer_id")]
        [Validation(Required=true)]
        public string ExternalLoadbalancerId { get; set; }

        [NameInMap("port")]
        [Validation(Required=true)]
        public int? Port { get; set; }

        [NameInMap("node_status")]
        [Validation(Required=true)]
        public string NodeStatus { get; set; }

        [NameInMap("cluster_healthy")]
        [Validation(Required=true)]
        public string ClusterHealthy { get; set; }

        [NameInMap("docker_version")]
        [Validation(Required=true)]
        public string DockerVersion { get; set; }

        [NameInMap("swarm_mode")]
        [Validation(Required=true)]
        public bool? SwarmMode { get; set; }

        [NameInMap("gw_bridge")]
        [Validation(Required=true)]
        public string GwBridge { get; set; }

        [NameInMap("private_zone")]
        [Validation(Required=true)]
        public bool? PrivateZone { get; set; }

        [NameInMap("profile")]
        [Validation(Required=true)]
        public string Profile { get; set; }

        [NameInMap("deletion_protection")]
        [Validation(Required=true)]
        public bool? DeletionProtection { get; set; }

        [NameInMap("capabilities")]
        [Validation(Required=true)]
        public string Capabilities { get; set; }

        [NameInMap("enabled_migration")]
        [Validation(Required=true)]
        public bool? EnabledMigration { get; set; }

        [NameInMap("need_update_agent")]
        [Validation(Required=true)]
        public bool? NeedUpdateAgent { get; set; }

        [NameInMap("tags")]
        [Validation(Required=true)]
        public List<DescribeClustersResponseBodyTags> Tags { get; set; }
        public class DescribeClustersResponseBodyTags : TeaModel {
            [NameInMap("key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("outputs")]
        [Validation(Required=true)]
        public List<DescribeClustersResponseBodyOutputs> Outputs { get; set; }
        public class DescribeClustersResponseBodyOutputs : TeaModel {
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

            [NameInMap("OutputKey")]
            [Validation(Required=true)]
            public string OutputKey { get; set; }

            [NameInMap("OutputValue")]
            [Validation(Required=true)]
            public string OutputValue { get; set; }

        }

        [NameInMap("upgrade_components")]
        [Validation(Required=true)]
        public DescribeClustersResponseBodyUpgradeComponents UpgradeComponents { get; set; }
        public class DescribeClustersResponseBodyUpgradeComponents : TeaModel {
            [NameInMap("Kubernetes")]
            [Validation(Required=true)]
            public DescribeClustersResponseBodyUpgradeComponentsKubernetes Kubernetes { get; set; }
            public class DescribeClustersResponseBodyUpgradeComponentsKubernetes : TeaModel {
                [NameInMap("component_name")]
                [Validation(Required=true)]
                public string ComponentName { get; set; }

                [NameInMap("version")]
                [Validation(Required=true)]
                public string Version { get; set; }

                [NameInMap("next_version")]
                [Validation(Required=true)]
                public string NextVersion { get; set; }

                [NameInMap("changed")]
                [Validation(Required=true)]
                public string Changed { get; set; }

                [NameInMap("can_upgrade")]
                [Validation(Required=true)]
                public bool? CanUpgrade { get; set; }

                [NameInMap("force")]
                [Validation(Required=true)]
                public bool? Force { get; set; }

                [NameInMap("policy")]
                [Validation(Required=true)]
                public string Policy { get; set; }

                [NameInMap("ExtraVars")]
                [Validation(Required=true)]
                public string ExtraVars { get; set; }

                [NameInMap("ready_to_upgrade")]
                [Validation(Required=true)]
                public string ReadyToUpgrade { get; set; }

                [NameInMap("message")]
                [Validation(Required=true)]
                public string Message { get; set; }

                [NameInMap("exist")]
                [Validation(Required=true)]
                public bool? Exist { get; set; }

                [NameInMap("required")]
                [Validation(Required=true)]
                public bool? Required { get; set; }

                [NameInMap("template")]
                [Validation(Required=true)]
                public string Template { get; set; }

            }
        };

        [NameInMap("parameters")]
        [Validation(Required=true)]
        public DescribeClustersResponseBodyParameters Parameters { get; set; }
        public class DescribeClustersResponseBodyParameters : TeaModel {
            [NameInMap("AdjustmentType")]
            [Validation(Required=true)]
            public string AdjustmentType { get; set; }
            [NameInMap("AuditFlags")]
            [Validation(Required=true)]
            public string AuditFlags { get; set; }
            [NameInMap("BetaVersion")]
            [Validation(Required=true)]
            public string BetaVersion { get; set; }
            [NameInMap("CA")]
            [Validation(Required=true)]
            public string CA { get; set; }
            [NameInMap("ClientCA")]
            [Validation(Required=true)]
            public string ClientCA { get; set; }
            [NameInMap("CloudMonitorFlags")]
            [Validation(Required=true)]
            public string CloudMonitorFlags { get; set; }
            [NameInMap("CloudMonitorVersion")]
            [Validation(Required=true)]
            public string CloudMonitorVersion { get; set; }
            [NameInMap("ContainerCIDR")]
            [Validation(Required=true)]
            public string ContainerCIDR { get; set; }
            [NameInMap("DisableAddons")]
            [Validation(Required=true)]
            public string DisableAddons { get; set; }
            [NameInMap("DockerVersion")]
            [Validation(Required=true)]
            public string DockerVersion { get; set; }
            [NameInMap("ESSDeletionProtection")]
            [Validation(Required=true)]
            public string ESSDeletionProtection { get; set; }
            [NameInMap("Eip")]
            [Validation(Required=true)]
            public string Eip { get; set; }
            [NameInMap("EipAddress")]
            [Validation(Required=true)]
            public string EipAddress { get; set; }
            [NameInMap("ElasticSearchHost")]
            [Validation(Required=true)]
            public string ElasticSearchHost { get; set; }
            [NameInMap("ElasticSearchPass")]
            [Validation(Required=true)]
            public string ElasticSearchPass { get; set; }
            [NameInMap("ElasticSearchPort")]
            [Validation(Required=true)]
            public string ElasticSearchPort { get; set; }
            [NameInMap("ElasticSearchUser")]
            [Validation(Required=true)]
            public string ElasticSearchUser { get; set; }
            [NameInMap("EtcdVersion")]
            [Validation(Required=true)]
            public string EtcdVersion { get; set; }
            [NameInMap("ExecuteVersion")]
            [Validation(Required=true)]
            public string ExecuteVersion { get; set; }
            [NameInMap("GPUFlags")]
            [Validation(Required=true)]
            public string GPUFlags { get; set; }
            [NameInMap("HealthCheckType")]
            [Validation(Required=true)]
            public string HealthCheckType { get; set; }
            [NameInMap("ImageId")]
            [Validation(Required=true)]
            public string ImageId { get; set; }
            [NameInMap("K8SMasterPolicyDocument")]
            [Validation(Required=true)]
            public string K8SMasterPolicyDocument { get; set; }
            [NameInMap("K8sWorkerPolicyDocument")]
            [Validation(Required=true)]
            public string K8sWorkerPolicyDocument { get; set; }
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }
            [NameInMap("KeyPair")]
            [Validation(Required=true)]
            public string KeyPair { get; set; }
            [NameInMap("KubernetesVersion")]
            [Validation(Required=true)]
            public string KubernetesVersion { get; set; }
            [NameInMap("LoggingType")]
            [Validation(Required=true)]
            public string LoggingType { get; set; }
            [NameInMap("MasterAmounts")]
            [Validation(Required=true)]
            public string MasterAmounts { get; set; }
            [NameInMap("MasterAutoRenew")]
            [Validation(Required=true)]
            public string MasterAutoRenew { get; set; }
            [NameInMap("MasterAutoRenewPeriod")]
            [Validation(Required=true)]
            public string MasterAutoRenewPeriod { get; set; }
            [NameInMap("MasterCount")]
            [Validation(Required=true)]
            public string MasterCount { get; set; }
            [NameInMap("MasterDataDisk")]
            [Validation(Required=true)]
            public string MasterDataDisk { get; set; }
            [NameInMap("MasterDataDisks")]
            [Validation(Required=true)]
            public string MasterDataDisks { get; set; }
            [NameInMap("MasterDeletionProtection")]
            [Validation(Required=true)]
            public string MasterDeletionProtection { get; set; }
            [NameInMap("MasterDeploymentSetId")]
            [Validation(Required=true)]
            public string MasterDeploymentSetId { get; set; }
            [NameInMap("MasterHpcClusterId")]
            [Validation(Required=true)]
            public string MasterHpcClusterId { get; set; }
            [NameInMap("MasterImageId")]
            [Validation(Required=true)]
            public string MasterImageId { get; set; }
            [NameInMap("MasterInstanceChargeType")]
            [Validation(Required=true)]
            public string MasterInstanceChargeType { get; set; }
            [NameInMap("MasterInstanceTypes")]
            [Validation(Required=true)]
            public string MasterInstanceTypes { get; set; }
            [NameInMap("MasterKeyPair")]
            [Validation(Required=true)]
            public string MasterKeyPair { get; set; }
            [NameInMap("MasterLoginPassword")]
            [Validation(Required=true)]
            public string MasterLoginPassword { get; set; }
            [NameInMap("MasterPeriod")]
            [Validation(Required=true)]
            public string MasterPeriod { get; set; }
            [NameInMap("MasterPeriodUnit")]
            [Validation(Required=true)]
            public string MasterPeriodUnit { get; set; }
            [NameInMap("MasterSlbSShHealthCheck")]
            [Validation(Required=true)]
            public string MasterSlbSShHealthCheck { get; set; }
            [NameInMap("MasterSnapshotPolicyId")]
            [Validation(Required=true)]
            public string MasterSnapshotPolicyId { get; set; }
            [NameInMap("MasterSystemDiskCategory")]
            [Validation(Required=true)]
            public string MasterSystemDiskCategory { get; set; }
            [NameInMap("MasterSystemDiskSize")]
            [Validation(Required=true)]
            public string MasterSystemDiskSize { get; set; }
            [NameInMap("MasterVSwitchIds")]
            [Validation(Required=true)]
            public string MasterVSwitchIds { get; set; }
            [NameInMap("NatGateway")]
            [Validation(Required=true)]
            public string NatGateway { get; set; }
            [NameInMap("NatGatewayId")]
            [Validation(Required=true)]
            public string NatGatewayId { get; set; }
            [NameInMap("Network")]
            [Validation(Required=true)]
            public string Network { get; set; }
            [NameInMap("NodeCIDRMask")]
            [Validation(Required=true)]
            public string NodeCIDRMask { get; set; }
            [NameInMap("NodeNameMode")]
            [Validation(Required=true)]
            public string NodeNameMode { get; set; }
            [NameInMap("NumOfNodes")]
            [Validation(Required=true)]
            public string NumOfNodes { get; set; }
            [NameInMap("Password")]
            [Validation(Required=true)]
            public string Password { get; set; }
            [NameInMap("PodVswitchIds")]
            [Validation(Required=true)]
            public string PodVswitchIds { get; set; }
            [NameInMap("ProtectedInstances")]
            [Validation(Required=true)]
            public string ProtectedInstances { get; set; }
            [NameInMap("ProxyMode")]
            [Validation(Required=true)]
            public string ProxyMode { get; set; }
            [NameInMap("PublicSLB")]
            [Validation(Required=true)]
            public string PublicSLB { get; set; }
            [NameInMap("RemoveInstanceIds")]
            [Validation(Required=true)]
            public string RemoveInstanceIds { get; set; }
            [NameInMap("ResourceGroupId")]
            [Validation(Required=true)]
            public string ResourceGroupId { get; set; }
            [NameInMap("SLBDeletionProtection")]
            [Validation(Required=true)]
            public string SLBDeletionProtection { get; set; }
            [NameInMap("SLSProjectName")]
            [Validation(Required=true)]
            public string SLSProjectName { get; set; }
            [NameInMap("SNatEntry")]
            [Validation(Required=true)]
            public string SNatEntry { get; set; }
            [NameInMap("SSHFlags")]
            [Validation(Required=true)]
            public string SSHFlags { get; set; }
            [NameInMap("SecurityGroupId")]
            [Validation(Required=true)]
            public string SecurityGroupId { get; set; }
            [NameInMap("ServiceCIDR")]
            [Validation(Required=true)]
            public string ServiceCIDR { get; set; }
            [NameInMap("SetUpArgs")]
            [Validation(Required=true)]
            public string SetUpArgs { get; set; }
            [NameInMap("SnatTableId")]
            [Validation(Required=true)]
            public string SnatTableId { get; set; }
            [NameInMap("Tags")]
            [Validation(Required=true)]
            public string Tags { get; set; }
            [NameInMap("UserCA")]
            [Validation(Required=true)]
            public string UserCA { get; set; }
            [NameInMap("UserData")]
            [Validation(Required=true)]
            public string UserData { get; set; }
            [NameInMap("VpcId")]
            [Validation(Required=true)]
            public string VpcId { get; set; }
            [NameInMap("WillReplace")]
            [Validation(Required=true)]
            public string WillReplace { get; set; }
            [NameInMap("WorkerAutoRenew")]
            [Validation(Required=true)]
            public string WorkerAutoRenew { get; set; }
            [NameInMap("WorkerAutoRenewPeriod")]
            [Validation(Required=true)]
            public string WorkerAutoRenewPeriod { get; set; }
            [NameInMap("WorkerDataDisk")]
            [Validation(Required=true)]
            public string WorkerDataDisk { get; set; }
            [NameInMap("WorkerDataDisks")]
            [Validation(Required=true)]
            public string WorkerDataDisks { get; set; }
            [NameInMap("WorkerDeletionProtection")]
            [Validation(Required=true)]
            public string WorkerDeletionProtection { get; set; }
            [NameInMap("WorkerDeploymentSetId")]
            [Validation(Required=true)]
            public string WorkerDeploymentSetId { get; set; }
            [NameInMap("WorkerHpcClusterId")]
            [Validation(Required=true)]
            public string WorkerHpcClusterId { get; set; }
            [NameInMap("WorkerImageId")]
            [Validation(Required=true)]
            public string WorkerImageId { get; set; }
            [NameInMap("WorkerInstanceChargeType")]
            [Validation(Required=true)]
            public string WorkerInstanceChargeType { get; set; }
            [NameInMap("WorkerInstanceTypes")]
            [Validation(Required=true)]
            public string WorkerInstanceTypes { get; set; }
            [NameInMap("WorkerKeyPair")]
            [Validation(Required=true)]
            public string WorkerKeyPair { get; set; }
            [NameInMap("WorkerLoginPassword")]
            [Validation(Required=true)]
            public string WorkerLoginPassword { get; set; }
            [NameInMap("WorkerPeriod")]
            [Validation(Required=true)]
            public string WorkerPeriod { get; set; }
            [NameInMap("WorkerPeriodUnit")]
            [Validation(Required=true)]
            public string WorkerPeriodUnit { get; set; }
            [NameInMap("WorkerSnapshotPolicyId")]
            [Validation(Required=true)]
            public string WorkerSnapshotPolicyId { get; set; }
            [NameInMap("WorkerSystemDiskCategory")]
            [Validation(Required=true)]
            public string WorkerSystemDiskCategory { get; set; }
            [NameInMap("WorkerSystemDiskSize")]
            [Validation(Required=true)]
            public string WorkerSystemDiskSize { get; set; }
            [NameInMap("WorkerVSwitchIds")]
            [Validation(Required=true)]
            public string WorkerVSwitchIds { get; set; }
            [NameInMap("ZoneId")]
            [Validation(Required=true)]
            public string ZoneId { get; set; }
        };

    }

}
