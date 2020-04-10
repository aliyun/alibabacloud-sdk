// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class CreateClusterBody extends TeaModel {
    @NameInMap("cluster_type")
    @Validation(required = true)
    public String clusterType;

    @NameInMap("name")
    @Validation(required = true)
    public String name;

    @NameInMap("region_id")
    @Validation(required = true)
    public String regionId;

    @NameInMap("kubernetes_version")
    @Validation(required = true)
    public String kubernetesVersion;

    @NameInMap("snat_entry")
    @Validation(required = true)
    public Boolean snatEntry;

    @NameInMap("endpoint_public_access")
    @Validation(required = true)
    public Boolean endpointPublicAccess;

    @NameInMap("ssh_flags")
    @Validation(required = true)
    public Boolean sshFlags;

    @NameInMap("cloud_monitor_flags")
    @Validation(required = true)
    public Boolean cloudMonitorFlags;

    @NameInMap("deletion_protection")
    @Validation(required = true)
    public Boolean deletionProtection;

    @NameInMap("node_cidr_mask")
    @Validation(required = true)
    public String nodeCidrMask;

    @NameInMap("proxy_mode")
    @Validation(required = true)
    public String proxyMode;

    @NameInMap("os_type")
    @Validation(required = true)
    public String osType;

    @NameInMap("platform")
    @Validation(required = true)
    public String platform;

    @NameInMap("node_port_range")
    @Validation(required = true)
    public String nodePortRange;

    @NameInMap("key_pair")
    @Validation(required = true)
    public String keyPair;

    @NameInMap("login_password")
    @Validation(required = true)
    public String loginPassword;

    @NameInMap("master_instance_charge_type")
    @Validation(required = true)
    public String masterInstanceChargeType;

    @NameInMap("worker_instance_charge_type")
    @Validation(required = true)
    public String workerInstanceChargeType;

    @NameInMap("master_period")
    @Validation(required = true)
    public Integer masterPeriod;

    @NameInMap("worker_period")
    @Validation(required = true)
    public Integer workerPeriod;

    @NameInMap("master_period_unit")
    @Validation(required = true)
    public String masterPeriodUnit;

    @NameInMap("worker_period_unit")
    @Validation(required = true)
    public String workerPeriodUnit;

    @NameInMap("master_auto_renew")
    @Validation(required = true)
    public Boolean masterAutoRenew;

    @NameInMap("master_auto_renew_period")
    @Validation(required = true)
    public Integer masterAutoRenewPeriod;

    @NameInMap("worker_auto_renew")
    @Validation(required = true)
    public Boolean workerAutoRenew;

    @NameInMap("worker_auto_renew_period")
    @Validation(required = true)
    public Integer workerAutoRenewPeriod;

    @NameInMap("cpu_policy")
    @Validation(required = true)
    public String cpuPolicy;

    @NameInMap("master_count")
    @Validation(required = true)
    public Integer masterCount;

    @NameInMap("master_system_disk_category")
    @Validation(required = true)
    public String masterSystemDiskCategory;

    @NameInMap("master_system_disk_size")
    @Validation(required = true)
    public Integer masterSystemDiskSize;

    @NameInMap("runtime")
    @Validation(required = true)
    public java.util.Map<String, Object> runtime;

    @NameInMap("num_of_nodes")
    @Validation(required = true)
    public Integer numOfNodes;

    @NameInMap("worker_system_disk_category")
    @Validation(required = true)
    public String workerSystemDiskCategory;

    @NameInMap("worker_system_disk_size")
    @Validation(required = true)
    public Integer workerSystemDiskSize;

    @NameInMap("worker_data_disk")
    @Validation(required = true)
    public Boolean workerDataDisk;

    @NameInMap("vpcid")
    @Validation(required = true)
    public String vpcid;

    @NameInMap("security_group_id")
    @Validation(required = true)
    public String securityGroupId;

    @NameInMap("container_cidr")
    @Validation(required = true)
    public String containerCidr;

    @NameInMap("service_cidr")
    @Validation(required = true)
    public String serviceCidr;

    @NameInMap("disable_rollback")
    @Validation(required = true)
    public Boolean disableRollback;

    @NameInMap("timeout_mins")
    @Validation(required = true)
    public Integer timeoutMins;

    @NameInMap("tags")
    @Validation(required = true)
    public java.util.List<CreateClusterBodyTags> tags;

    @NameInMap("addons")
    @Validation(required = true)
    public java.util.List<CreateClusterBodyAddons> addons;

    @NameInMap("taints")
    @Validation(required = true)
    public java.util.List<CreateClusterBodyTaints> taints;

    @NameInMap("worker_data_disks")
    @Validation(required = true)
    public java.util.List<CreateClusterBodyWorkerDataDisks> workerDataDisks;

    @NameInMap("master_vswitch_ids")
    @Validation(required = true)
    public java.util.List<String> masterVswitchIds;

    @NameInMap("master_instance_types")
    @Validation(required = true)
    public java.util.List<String> masterInstanceTypes;

    @NameInMap("worker_instance_types")
    @Validation(required = true)
    public java.util.List<String> workerInstanceTypes;

    @NameInMap("worker_vswitch_ids")
    @Validation(required = true)
    public java.util.List<String> workerVswitchIds;

    public static CreateClusterBody build(java.util.Map<String, ?> map) throws Exception {
        CreateClusterBody self = new CreateClusterBody();
        return TeaModel.build(map, self);
    }

    public static class CreateClusterBodyTags extends TeaModel {
        @NameInMap("key")
        @Validation(required = true)
        public String key;

        @NameInMap("value")
        @Validation(required = true)
        public String value;

        public static CreateClusterBodyTags build(java.util.Map<String, ?> map) throws Exception {
            CreateClusterBodyTags self = new CreateClusterBodyTags();
            return TeaModel.build(map, self);
        }

    }

    public static class CreateClusterBodyAddons extends TeaModel {
        @NameInMap("name")
        @Validation(required = true)
        public String name;

        @NameInMap("config")
        @Validation(required = true)
        public String config;

        public static CreateClusterBodyAddons build(java.util.Map<String, ?> map) throws Exception {
            CreateClusterBodyAddons self = new CreateClusterBodyAddons();
            return TeaModel.build(map, self);
        }

    }

    public static class CreateClusterBodyTaints extends TeaModel {
        @NameInMap("key")
        @Validation(required = true)
        public String key;

        @NameInMap("value")
        @Validation(required = true)
        public String value;

        @NameInMap("effect")
        @Validation(required = true)
        public String effect;

        public static CreateClusterBodyTaints build(java.util.Map<String, ?> map) throws Exception {
            CreateClusterBodyTaints self = new CreateClusterBodyTaints();
            return TeaModel.build(map, self);
        }

    }

    public static class CreateClusterBodyWorkerDataDisks extends TeaModel {
        @NameInMap("category")
        @Validation(required = true)
        public String category;

        @NameInMap("size")
        @Validation(required = true)
        public String size;

        @NameInMap("encrypted")
        @Validation(required = true)
        public String encrypted;

        public static CreateClusterBodyWorkerDataDisks build(java.util.Map<String, ?> map) throws Exception {
            CreateClusterBodyWorkerDataDisks self = new CreateClusterBodyWorkerDataDisks();
            return TeaModel.build(map, self);
        }

    }

}
