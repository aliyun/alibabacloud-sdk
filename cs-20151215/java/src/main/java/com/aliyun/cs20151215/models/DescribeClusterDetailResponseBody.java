// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeClusterDetailResponseBody extends TeaModel {
    @NameInMap("name")
    @Validation(required = true)
    public String name;

    @NameInMap("cluster_id")
    @Validation(required = true)
    public String clusterId;

    @NameInMap("size")
    @Validation(required = true)
    public Integer size;

    @NameInMap("region_id")
    @Validation(required = true)
    public String regionId;

    @NameInMap("state")
    @Validation(required = true)
    public String state;

    @NameInMap("cluster_type")
    @Validation(required = true)
    public String clusterType;

    @NameInMap("created")
    @Validation(required = true)
    public String created;

    @NameInMap("updated")
    @Validation(required = true)
    public String updated;

    @NameInMap("init_version")
    @Validation(required = true)
    public String initVersion;

    @NameInMap("current_version")
    @Validation(required = true)
    public String currentVersion;

    @NameInMap("meta_data")
    @Validation(required = true)
    public String metaData;

    @NameInMap("resource_group_id")
    @Validation(required = true)
    public String resourceGroupId;

    @NameInMap("instance_type")
    @Validation(required = true)
    public String instanceType;

    @NameInMap("vpc_id")
    @Validation(required = true)
    public String vpcId;

    @NameInMap("vswitch_id")
    @Validation(required = true)
    public String vswitchId;

    @NameInMap("vswitch_cidr")
    @Validation(required = true)
    public String vswitchCidr;

    @NameInMap("data_disk_size")
    @Validation(required = true)
    public Integer dataDiskSize;

    @NameInMap("data_disk_category")
    @Validation(required = true)
    public String dataDiskCategory;

    @NameInMap("security_group_id")
    @Validation(required = true)
    public String securityGroupId;

    @NameInMap("zone_id")
    @Validation(required = true)
    public String zoneId;

    @NameInMap("network_mode")
    @Validation(required = true)
    public String networkMode;

    @NameInMap("subnet_cidr")
    @Validation(required = true)
    public String subnetCidr;

    @NameInMap("master_url")
    @Validation(required = true)
    public String masterUrl;

    @NameInMap("external_loadbalancer_id")
    @Validation(required = true)
    public String externalLoadbalancerId;

    @NameInMap("port")
    @Validation(required = true)
    public Integer port;

    @NameInMap("node_status")
    @Validation(required = true)
    public String nodeStatus;

    @NameInMap("cluster_healthy")
    @Validation(required = true)
    public String clusterHealthy;

    @NameInMap("docker_version")
    @Validation(required = true)
    public String dockerVersion;

    @NameInMap("swarm_mode")
    @Validation(required = true)
    public Boolean swarmMode;

    @NameInMap("gw_bridge")
    @Validation(required = true)
    public String gwBridge;

    @NameInMap("private_zone")
    @Validation(required = true)
    public Boolean privateZone;

    @NameInMap("profile")
    @Validation(required = true)
    public String profile;

    @NameInMap("deletion_protection")
    @Validation(required = true)
    public Boolean deletionProtection;

    @NameInMap("capabilities")
    @Validation(required = true)
    public String capabilities;

    @NameInMap("enabled_migration")
    @Validation(required = true)
    public Boolean enabledMigration;

    @NameInMap("need_update_agent")
    @Validation(required = true)
    public Boolean needUpdateAgent;

    @NameInMap("tags")
    @Validation(required = true)
    public java.util.List<DescribeClusterDetailResponseBodyTags> tags;

    @NameInMap("outputs")
    @Validation(required = true)
    public java.util.List<DescribeClusterDetailResponseBodyOutputs> outputs;

    @NameInMap("upgrade_components")
    @Validation(required = true)
    public DescribeClusterDetailResponseBodyUpgradeComponents upgradeComponents;

    @NameInMap("parameters")
    @Validation(required = true)
    public DescribeClusterDetailResponseBodyParameters parameters;

    public static DescribeClusterDetailResponseBody build(java.util.Map<String, ?> map) throws Exception {
        DescribeClusterDetailResponseBody self = new DescribeClusterDetailResponseBody();
        return TeaModel.build(map, self);
    }

    public static class DescribeClusterDetailResponseBodyTags extends TeaModel {
        @NameInMap("key")
        @Validation(required = true)
        public String key;

        @NameInMap("value")
        @Validation(required = true)
        public String value;

        public static DescribeClusterDetailResponseBodyTags build(java.util.Map<String, ?> map) throws Exception {
            DescribeClusterDetailResponseBodyTags self = new DescribeClusterDetailResponseBodyTags();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeClusterDetailResponseBodyOutputs extends TeaModel {
        @NameInMap("Description")
        @Validation(required = true)
        public String description;

        @NameInMap("OutputKey")
        @Validation(required = true)
        public String outputKey;

        @NameInMap("OutputValue")
        @Validation(required = true)
        public String outputValue;

        public static DescribeClusterDetailResponseBodyOutputs build(java.util.Map<String, ?> map) throws Exception {
            DescribeClusterDetailResponseBodyOutputs self = new DescribeClusterDetailResponseBodyOutputs();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeClusterDetailResponseBodyUpgradeComponentsKubernetes extends TeaModel {
        @NameInMap("component_name")
        @Validation(required = true)
        public String componentName;

        @NameInMap("version")
        @Validation(required = true)
        public String version;

        @NameInMap("next_version")
        @Validation(required = true)
        public String nextVersion;

        @NameInMap("changed")
        @Validation(required = true)
        public String changed;

        @NameInMap("can_upgrade")
        @Validation(required = true)
        public Boolean canUpgrade;

        @NameInMap("force")
        @Validation(required = true)
        public Boolean force;

        @NameInMap("policy")
        @Validation(required = true)
        public String policy;

        @NameInMap("ExtraVars")
        @Validation(required = true)
        public String extraVars;

        @NameInMap("ready_to_upgrade")
        @Validation(required = true)
        public String readyToUpgrade;

        @NameInMap("message")
        @Validation(required = true)
        public String message;

        @NameInMap("exist")
        @Validation(required = true)
        public Boolean exist;

        @NameInMap("required")
        @Validation(required = true)
        public Boolean required;

        @NameInMap("template")
        @Validation(required = true)
        public String template;

        public static DescribeClusterDetailResponseBodyUpgradeComponentsKubernetes build(java.util.Map<String, ?> map) throws Exception {
            DescribeClusterDetailResponseBodyUpgradeComponentsKubernetes self = new DescribeClusterDetailResponseBodyUpgradeComponentsKubernetes();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeClusterDetailResponseBodyUpgradeComponents extends TeaModel {
        @NameInMap("Kubernetes")
        @Validation(required = true)
        public DescribeClusterDetailResponseBodyUpgradeComponentsKubernetes kubernetes;

        public static DescribeClusterDetailResponseBodyUpgradeComponents build(java.util.Map<String, ?> map) throws Exception {
            DescribeClusterDetailResponseBodyUpgradeComponents self = new DescribeClusterDetailResponseBodyUpgradeComponents();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeClusterDetailResponseBodyParameters extends TeaModel {
        @NameInMap("AdjustmentType")
        @Validation(required = true)
        public String adjustmentType;

        @NameInMap("AuditFlags")
        @Validation(required = true)
        public String auditFlags;

        @NameInMap("BetaVersion")
        @Validation(required = true)
        public String betaVersion;

        @NameInMap("CA")
        @Validation(required = true)
        public String CA;

        @NameInMap("ClientCA")
        @Validation(required = true)
        public String clientCA;

        @NameInMap("CloudMonitorFlags")
        @Validation(required = true)
        public String cloudMonitorFlags;

        @NameInMap("CloudMonitorVersion")
        @Validation(required = true)
        public String cloudMonitorVersion;

        @NameInMap("ContainerCIDR")
        @Validation(required = true)
        public String containerCIDR;

        @NameInMap("DisableAddons")
        @Validation(required = true)
        public String disableAddons;

        @NameInMap("DockerVersion")
        @Validation(required = true)
        public String dockerVersion;

        @NameInMap("ESSDeletionProtection")
        @Validation(required = true)
        public String ESSDeletionProtection;

        @NameInMap("Eip")
        @Validation(required = true)
        public String eip;

        @NameInMap("EipAddress")
        @Validation(required = true)
        public String eipAddress;

        @NameInMap("ElasticSearchHost")
        @Validation(required = true)
        public String elasticSearchHost;

        @NameInMap("ElasticSearchPass")
        @Validation(required = true)
        public String elasticSearchPass;

        @NameInMap("ElasticSearchPort")
        @Validation(required = true)
        public String elasticSearchPort;

        @NameInMap("ElasticSearchUser")
        @Validation(required = true)
        public String elasticSearchUser;

        @NameInMap("EtcdVersion")
        @Validation(required = true)
        public String etcdVersion;

        @NameInMap("ExecuteVersion")
        @Validation(required = true)
        public String executeVersion;

        @NameInMap("GPUFlags")
        @Validation(required = true)
        public String GPUFlags;

        @NameInMap("HealthCheckType")
        @Validation(required = true)
        public String healthCheckType;

        @NameInMap("ImageId")
        @Validation(required = true)
        public String imageId;

        @NameInMap("K8SMasterPolicyDocument")
        @Validation(required = true)
        public String k8SMasterPolicyDocument;

        @NameInMap("K8sWorkerPolicyDocument")
        @Validation(required = true)
        public String k8sWorkerPolicyDocument;

        @NameInMap("Key")
        @Validation(required = true)
        public String key;

        @NameInMap("KeyPair")
        @Validation(required = true)
        public String keyPair;

        @NameInMap("KubernetesVersion")
        @Validation(required = true)
        public String kubernetesVersion;

        @NameInMap("LoggingType")
        @Validation(required = true)
        public String loggingType;

        @NameInMap("MasterAmounts")
        @Validation(required = true)
        public String masterAmounts;

        @NameInMap("MasterAutoRenew")
        @Validation(required = true)
        public String masterAutoRenew;

        @NameInMap("MasterAutoRenewPeriod")
        @Validation(required = true)
        public String masterAutoRenewPeriod;

        @NameInMap("MasterCount")
        @Validation(required = true)
        public String masterCount;

        @NameInMap("MasterDataDisk")
        @Validation(required = true)
        public String masterDataDisk;

        @NameInMap("MasterDataDisks")
        @Validation(required = true)
        public String masterDataDisks;

        @NameInMap("MasterDeletionProtection")
        @Validation(required = true)
        public String masterDeletionProtection;

        @NameInMap("MasterDeploymentSetId")
        @Validation(required = true)
        public String masterDeploymentSetId;

        @NameInMap("MasterHpcClusterId")
        @Validation(required = true)
        public String masterHpcClusterId;

        @NameInMap("MasterImageId")
        @Validation(required = true)
        public String masterImageId;

        @NameInMap("MasterInstanceChargeType")
        @Validation(required = true)
        public String masterInstanceChargeType;

        @NameInMap("MasterInstanceTypes")
        @Validation(required = true)
        public String masterInstanceTypes;

        @NameInMap("MasterKeyPair")
        @Validation(required = true)
        public String masterKeyPair;

        @NameInMap("MasterLoginPassword")
        @Validation(required = true)
        public String masterLoginPassword;

        @NameInMap("MasterPeriod")
        @Validation(required = true)
        public String masterPeriod;

        @NameInMap("MasterPeriodUnit")
        @Validation(required = true)
        public String masterPeriodUnit;

        @NameInMap("MasterSlbSShHealthCheck")
        @Validation(required = true)
        public String masterSlbSShHealthCheck;

        @NameInMap("MasterSnapshotPolicyId")
        @Validation(required = true)
        public String masterSnapshotPolicyId;

        @NameInMap("MasterSystemDiskCategory")
        @Validation(required = true)
        public String masterSystemDiskCategory;

        @NameInMap("MasterSystemDiskSize")
        @Validation(required = true)
        public String masterSystemDiskSize;

        @NameInMap("MasterVSwitchIds")
        @Validation(required = true)
        public String masterVSwitchIds;

        @NameInMap("NatGateway")
        @Validation(required = true)
        public String natGateway;

        @NameInMap("NatGatewayId")
        @Validation(required = true)
        public String natGatewayId;

        @NameInMap("Network")
        @Validation(required = true)
        public String network;

        @NameInMap("NodeCIDRMask")
        @Validation(required = true)
        public String nodeCIDRMask;

        @NameInMap("NodeNameMode")
        @Validation(required = true)
        public String nodeNameMode;

        @NameInMap("NumOfNodes")
        @Validation(required = true)
        public String numOfNodes;

        @NameInMap("Password")
        @Validation(required = true)
        public String password;

        @NameInMap("PodVswitchIds")
        @Validation(required = true)
        public String podVswitchIds;

        @NameInMap("ProtectedInstances")
        @Validation(required = true)
        public String protectedInstances;

        @NameInMap("ProxyMode")
        @Validation(required = true)
        public String proxyMode;

        @NameInMap("PublicSLB")
        @Validation(required = true)
        public String publicSLB;

        @NameInMap("RemoveInstanceIds")
        @Validation(required = true)
        public String removeInstanceIds;

        @NameInMap("ResourceGroupId")
        @Validation(required = true)
        public String resourceGroupId;

        @NameInMap("SLBDeletionProtection")
        @Validation(required = true)
        public String SLBDeletionProtection;

        @NameInMap("SLSProjectName")
        @Validation(required = true)
        public String SLSProjectName;

        @NameInMap("SNatEntry")
        @Validation(required = true)
        public String SNatEntry;

        @NameInMap("SSHFlags")
        @Validation(required = true)
        public String SSHFlags;

        @NameInMap("SecurityGroupId")
        @Validation(required = true)
        public String securityGroupId;

        @NameInMap("ServiceCIDR")
        @Validation(required = true)
        public String serviceCIDR;

        @NameInMap("SetUpArgs")
        @Validation(required = true)
        public String setUpArgs;

        @NameInMap("SnatTableId")
        @Validation(required = true)
        public String snatTableId;

        @NameInMap("Tags")
        @Validation(required = true)
        public String tags;

        @NameInMap("UserCA")
        @Validation(required = true)
        public String userCA;

        @NameInMap("UserData")
        @Validation(required = true)
        public String userData;

        @NameInMap("VpcId")
        @Validation(required = true)
        public String vpcId;

        @NameInMap("WillReplace")
        @Validation(required = true)
        public String willReplace;

        @NameInMap("WorkerAutoRenew")
        @Validation(required = true)
        public String workerAutoRenew;

        @NameInMap("WorkerAutoRenewPeriod")
        @Validation(required = true)
        public String workerAutoRenewPeriod;

        @NameInMap("WorkerDataDisk")
        @Validation(required = true)
        public String workerDataDisk;

        @NameInMap("WorkerDataDisks")
        @Validation(required = true)
        public String workerDataDisks;

        @NameInMap("WorkerDeletionProtection")
        @Validation(required = true)
        public String workerDeletionProtection;

        @NameInMap("WorkerDeploymentSetId")
        @Validation(required = true)
        public String workerDeploymentSetId;

        @NameInMap("WorkerHpcClusterId")
        @Validation(required = true)
        public String workerHpcClusterId;

        @NameInMap("WorkerImageId")
        @Validation(required = true)
        public String workerImageId;

        @NameInMap("WorkerInstanceChargeType")
        @Validation(required = true)
        public String workerInstanceChargeType;

        @NameInMap("WorkerInstanceTypes")
        @Validation(required = true)
        public String workerInstanceTypes;

        @NameInMap("WorkerKeyPair")
        @Validation(required = true)
        public String workerKeyPair;

        @NameInMap("WorkerLoginPassword")
        @Validation(required = true)
        public String workerLoginPassword;

        @NameInMap("WorkerPeriod")
        @Validation(required = true)
        public String workerPeriod;

        @NameInMap("WorkerPeriodUnit")
        @Validation(required = true)
        public String workerPeriodUnit;

        @NameInMap("WorkerSnapshotPolicyId")
        @Validation(required = true)
        public String workerSnapshotPolicyId;

        @NameInMap("WorkerSystemDiskCategory")
        @Validation(required = true)
        public String workerSystemDiskCategory;

        @NameInMap("WorkerSystemDiskSize")
        @Validation(required = true)
        public String workerSystemDiskSize;

        @NameInMap("WorkerVSwitchIds")
        @Validation(required = true)
        public String workerVSwitchIds;

        @NameInMap("ZoneId")
        @Validation(required = true)
        public String zoneId;

        public static DescribeClusterDetailResponseBodyParameters build(java.util.Map<String, ?> map) throws Exception {
            DescribeClusterDetailResponseBodyParameters self = new DescribeClusterDetailResponseBodyParameters();
            return TeaModel.build(map, self);
        }

    }

}
