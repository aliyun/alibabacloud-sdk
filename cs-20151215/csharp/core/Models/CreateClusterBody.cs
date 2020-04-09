// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class CreateClusterBody : TeaModel {
        [NameInMap("cluster_type")]
        [Validation(Required=true)]
        public string ClusterType { get; set; }

        [NameInMap("name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("region_id")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("kubernetes_version")]
        [Validation(Required=true)]
        public string KubernetesVersion { get; set; }

        [NameInMap("snat_entry")]
        [Validation(Required=true)]
        public bool? SnatEntry { get; set; }

        [NameInMap("endpoint_public_access")]
        [Validation(Required=true)]
        public bool? EndpointPublicAccess { get; set; }

        [NameInMap("ssh_flags")]
        [Validation(Required=true)]
        public bool? SshFlags { get; set; }

        [NameInMap("cloud_monitor_flags")]
        [Validation(Required=true)]
        public bool? CloudMonitorFlags { get; set; }

        [NameInMap("deletion_protection")]
        [Validation(Required=true)]
        public bool? DeletionProtection { get; set; }

        [NameInMap("node_cidr_mask")]
        [Validation(Required=true)]
        public string NodeCidrMask { get; set; }

        [NameInMap("proxy_mode")]
        [Validation(Required=true)]
        public string ProxyMode { get; set; }

        [NameInMap("os_type")]
        [Validation(Required=true)]
        public string OsType { get; set; }

        [NameInMap("platform")]
        [Validation(Required=true)]
        public string Platform { get; set; }

        [NameInMap("node_port_range")]
        [Validation(Required=true)]
        public string NodePortRange { get; set; }

        [NameInMap("key_pair")]
        [Validation(Required=true)]
        public string KeyPair { get; set; }

        [NameInMap("login_password")]
        [Validation(Required=true)]
        public string LoginPassword { get; set; }

        [NameInMap("master_instance_charge_type")]
        [Validation(Required=true)]
        public string MasterInstanceChargeType { get; set; }

        [NameInMap("worker_instance_charge_type")]
        [Validation(Required=true)]
        public string WorkerInstanceChargeType { get; set; }

        [NameInMap("master_period")]
        [Validation(Required=true)]
        public int? MasterPeriod { get; set; }

        [NameInMap("worker_period")]
        [Validation(Required=true)]
        public int? WorkerPeriod { get; set; }

        [NameInMap("master_period_unit")]
        [Validation(Required=true)]
        public string MasterPeriodUnit { get; set; }

        [NameInMap("worker_period_unit")]
        [Validation(Required=true)]
        public string WorkerPeriodUnit { get; set; }

        [NameInMap("master_auto_renew")]
        [Validation(Required=true)]
        public bool? MasterAutoRenew { get; set; }

        [NameInMap("master_auto_renew_period")]
        [Validation(Required=true)]
        public int? MasterAutoRenewPeriod { get; set; }

        [NameInMap("worker_auto_renew")]
        [Validation(Required=true)]
        public bool? WorkerAutoRenew { get; set; }

        [NameInMap("worker_auto_renew_period")]
        [Validation(Required=true)]
        public int? WorkerAutoRenewPeriod { get; set; }

        [NameInMap("cpu_policy")]
        [Validation(Required=true)]
        public string CpuPolicy { get; set; }

        [NameInMap("master_count")]
        [Validation(Required=true)]
        public int? MasterCount { get; set; }

        [NameInMap("master_system_disk_category")]
        [Validation(Required=true)]
        public string MasterSystemDiskCategory { get; set; }

        [NameInMap("master_system_disk_size")]
        [Validation(Required=true)]
        public int? MasterSystemDiskSize { get; set; }

        [NameInMap("runtime")]
        [Validation(Required=true)]
        public Dictionary<string, string> Runtime { get; set; }

        [NameInMap("num_of_nodes")]
        [Validation(Required=true)]
        public int? NumOfNodes { get; set; }

        [NameInMap("worker_system_disk_category")]
        [Validation(Required=true)]
        public string WorkerSystemDiskCategory { get; set; }

        [NameInMap("worker_system_disk_size")]
        [Validation(Required=true)]
        public int? WorkerSystemDiskSize { get; set; }

        [NameInMap("worker_data_disk")]
        [Validation(Required=true)]
        public bool? WorkerDataDisk { get; set; }

        [NameInMap("vpcid")]
        [Validation(Required=true)]
        public string Vpcid { get; set; }

        [NameInMap("security_group_id")]
        [Validation(Required=true)]
        public string SecurityGroupId { get; set; }

        [NameInMap("container_cidr")]
        [Validation(Required=true)]
        public string ContainerCidr { get; set; }

        [NameInMap("service_cidr")]
        [Validation(Required=true)]
        public string ServiceCidr { get; set; }

        [NameInMap("disable_rollback")]
        [Validation(Required=true)]
        public bool? DisableRollback { get; set; }

        [NameInMap("timeout_mins")]
        [Validation(Required=true)]
        public int? TimeoutMins { get; set; }

        [NameInMap("tags")]
        [Validation(Required=true)]
        public List<CreateClusterBodyTags> Tags { get; set; }
        public class CreateClusterBodyTags : TeaModel {
            [NameInMap("key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("addons")]
        [Validation(Required=true)]
        public List<CreateClusterBodyAddons> Addons { get; set; }
        public class CreateClusterBodyAddons : TeaModel {
            [NameInMap("name")]
            [Validation(Required=true)]
            public string Name { get; set; }

            [NameInMap("config")]
            [Validation(Required=true)]
            public string Config { get; set; }

        }

        [NameInMap("taints")]
        [Validation(Required=true)]
        public List<CreateClusterBodyTaints> Taints { get; set; }
        public class CreateClusterBodyTaints : TeaModel {
            [NameInMap("key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("value")]
            [Validation(Required=true)]
            public string Value { get; set; }

            [NameInMap("effect")]
            [Validation(Required=true)]
            public string Effect { get; set; }

        }

        [NameInMap("worker_data_disks")]
        [Validation(Required=true)]
        public List<CreateClusterBodyWorkerDataDisks> WorkerDataDisks { get; set; }
        public class CreateClusterBodyWorkerDataDisks : TeaModel {
            [NameInMap("category")]
            [Validation(Required=true)]
            public string Category { get; set; }

            [NameInMap("size")]
            [Validation(Required=true)]
            public string Size { get; set; }

            [NameInMap("encrypted")]
            [Validation(Required=true)]
            public string Encrypted { get; set; }

        }

        [NameInMap("master_vswitch_ids")]
        [Validation(Required=true)]
        public List<string> MasterVswitchIds { get; set; }

        [NameInMap("master_instance_types")]
        [Validation(Required=true)]
        public List<string> MasterInstanceTypes { get; set; }

        [NameInMap("worker_instance_types")]
        [Validation(Required=true)]
        public List<string> WorkerInstanceTypes { get; set; }

        [NameInMap("worker_vswitch_ids")]
        [Validation(Required=true)]
        public List<string> WorkerVswitchIds { get; set; }

    }

}
